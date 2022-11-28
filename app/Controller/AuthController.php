<?php

namespace App\Controller;

use App\Model\Question;
use App\Model\Tag;
use App\Model\User;
use Luminous\Controller\Controller;
use Luminous\Request\Request;
use Luminous\View\View;
use Parsedown;

class AuthController extends Controller
{

    public function profile(){
        loggedIn();

        $question = new Question();
        $tag = new Tag();
        $questions = $question->query("SELECT * FROM question WHERE user_id = ".auth()->id)->fetchAll();
        $parseDown = new Parsedown();

        if ($questions==[]){
            View::call('profile.index',compact('questions'),'app');
            return;
        }


        $ids = [];
        foreach($questions as $question) {
            $ids[] = (int) $question->id;
        }
        $question_ids = implode(',', $ids);


        $stmt = $tag->query("SELECT tag.*, question_tag.question_id FROM tag INNER JOIN question_tag ON question_tag.tag_id=tag.id WHERE question_tag.question_id IN ( {$question_ids} )");
        $tags = $stmt->fetchAll($tag::FETCH_CLASS, get_class($tag));

        $grouped_tag=[];
        foreach ($tags as $tag){
            $grouped_tag[$tag->question_id][] = $tag;
        }

        foreach ($questions as $question){
            $question->problem_detail = $parseDown->text($question->problem_detail);
            $question->problem_result = $parseDown->text($question->problem_result);
            $question->tag = $grouped_tag[$question->id]??null;
        }

        View::call('profile.index',compact("questions"),'app');
    }

    public function create(){
        if (!isLoggedIn()){
            $_SESSION['name'] = $_COOKIE['name']    ??  null;
            $_SESSION['email'] = $_COOKIE['email']  ??  null;
            if (isLoggedIn()){
                header('Location: ', true, 303);
            }
        }
        View::call('login',null,'guest');
    }

    public function store(){
        $request = new Request();
        $user = new User();

        $errors = $request->validate([
            'email' => array('email', 'max:255', 'required', 'exist:User'),
            'password' => array('required')
        ]);

        if($errors){
            View::call('login',compact('errors'),'guest');
            return;
        }

        $stmt = $user->prepare('SELECT * FROM user WHERE email= :email limit 1');
        $stmt->execute(['email'=>$request->email]);
        $user = $stmt->fetch();

        if(password_verify($request->password, $user->password)) {
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;
            if (isset($request->remember_me)){
                setcookie('name', $user->name, time() + (86400 * 30), "/"); // 86400 = 1 day
                setcookie('email', $user->email, time() + (86400 * 30), "/"); // 86400 = 1 day
            }
            header('Location: /', true, 303);
        }else{
            $errors['password'][] = ['password'=> 'Password Does not match with current user'];
            View::call('login',compact('errors'),'guest');
            return;

        }
    }

    public function destroy(){
        loggedIn();
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        setcookie('name', null, -1, '/');
        setcookie('email', null, -1, '/');
        header('Location: /login', true, 303);
    }
}
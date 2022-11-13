<?php

namespace App\Controller;

use App\Model\User;
use Luminous\Controller\Controller;
use Luminous\Request\Request;
use Luminous\View\View;

class AuthController extends Controller
{

    public function profile(){
        loggedIn();
        View::call('profile.index',null,'app');
    }

    public function create(){
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
            header('Location: /askWorld', true, 303);
        }else{
            $errors['password'][] = ['password'=> 'Password Does not match with current user'];
            View::call('login',compact('errors'),'guest');
        }
    }

    public function destroy(){
        loggedIn();
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        header('Location: /askWorld/login', true, 303);
    }
}
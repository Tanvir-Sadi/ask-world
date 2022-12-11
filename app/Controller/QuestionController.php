<?php

namespace App\Controller;

use App\Model\Answer;
use App\Model\Question;
use App\Model\Tag;
use App\Model\User;
use Luminous\Request\Request;
use Luminous\View\View;
use Luminous\Controller\Controller;
use Parsedown;


class QuestionController extends Controller
{
    public function index(){
        loggedIn();
        $question = new Question();
        $tag = new Tag();
        $questions = $question->all();
        $parseDown = new Parsedown();

        if ($questions==[]){
            View::call('question.index',compact('questions'),'app');
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
        View::call('question.index',compact('questions'),'app');
    }

    public function show(){
        loggedIn();
        $question = new Question();
        $answer = new Answer();
        $user = new User();
        $parseDown = new Parsedown();

        $question = $question->find($this->question);
        $stmt = $answer->query("SELECT * FROM answer WHERE question_id={$question->id} ORDER BY updated_at DESC");
        $answers = $stmt->fetchAll($answer::FETCH_CLASS, get_class($answer));
        $question->user = $user->find($question->user_id);

        $grouped_answer=[];
        foreach ($answers as $answer){
            $answer->description = $parseDown->text($answer->description);
            $grouped_tag[$answer->question_id][] = $answer;
        }
        $question->answers = $grouped_tag[$question->id]??null;
        $question->problem_detail = $parseDown->text($question->problem_detail);
        $question->problem_result = $parseDown->text($question->problem_result);

        View::call('question.show',compact('question'),'app');
    }

    public function create(){
        loggedIn();
        View::call('question.create',null,'app');
    }

    public function store(){
        loggedIn();
        $request = new Request();
        $question = new Question();
        $tag = new Tag();

        $errors = $request->validate([
            'title' => array('string', 'required'),
            'problem_detail' => array('string', 'required'),
            'problem_result' => array('string', 'required'),
        ]);
        if ($errors){
            View::call('question.create',compact('errors'),'app');
        }

        $question = $question->create([
            'title' => $request->title,
            'problem_detail' => $request->problem_detail,
            'problem_result' => $request->problem_result,
            'user_id' => auth()->id
        ]);

        $requestedTags = explode(" ", $request->tag);
        foreach ($requestedTags as $requestedTag){
            if ($tag->isUnique('name', $requestedTag)==0){
                $tag = $tag->create(['name'=> $requestedTag]);

            }
            else{
                $stmt = $tag->prepare("SELECT * FROM tag WHERE name= :name limit 1");
                $stmt->execute(['name'=>$requestedTag]);
                $tag = $stmt->fetchObject(get_class($tag));

            }
            $stmt = $question->prepare("INSERT INTO question_tag(question_id, tag_id) VALUES (:question_id, :tag_id);");
            $stmt->execute([
                'question_id'=>$question->id,
                'tag_id'=>$tag->id
            ]);
        }
        header('Location: /', true, 303);
    }


}
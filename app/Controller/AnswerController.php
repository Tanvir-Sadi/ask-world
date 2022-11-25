<?php

namespace App\Controller;


use App\Model\Answer;
use App\Model\Question;
use App\Model\Tag;
use Luminous\Request\Request;
use Luminous\View\View;
use Luminous\Controller\Controller;

class AnswerController extends Controller
{
    public function index(){
        loggedIn();
        View::call('index','hi','app');
    }

    public function show(){
        loggedIn();
        View::call('question.show',$this->request,'app');
    }

    public function create(){
        loggedIn();
        View::call('question.create',null,'app');
    }

    public function store(){
        loggedIn();
        $request = new Request();
        $question = new Question();
        $answer = new Answer();
        $question = $question->find($this->question);

        $errors = $request->validate([
            'description' => array('string', 'required'),
        ]);
        if ($errors){
            View::call('question.show',compact('errors', 'question'),'app');
            return;
        }

        $answer = $answer->create([
            'description' => $request->description,
            'question_id' => $question->id,
            'user_id'     => auth()->id
        ]);

        header('Location: /askWorld/question/'.$question->id, true, 303);
    }

}
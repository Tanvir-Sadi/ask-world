<?php

namespace App\Controller;


use App\Model\Answer;
use App\Model\Question;
use Luminous\Notification\Notification;
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

    /**
     * @throws \ErrorException
     */
    public function store(){
        loggedIn();
        $request = new Request();
        $question = new Question();
        $answer = new Answer();
        $notification = new Notification();

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

        $notification->make("Someone Answer your question!", $question->title, auth());

        header('Location: /question/'.$question->id, true, 303);
    }

}
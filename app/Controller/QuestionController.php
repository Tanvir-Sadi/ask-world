<?php

namespace App\Controller;


use Luminous\View\View;
use Luminous\Controller\Controller;


class QuestionController extends Controller
{
    public function index(){
        loggedIn();

        $data = $_GET ? $_GET : null;
        View::call('question.index',compact('data'),'app');
    }

    public function show(){
        loggedIn();
        View::call('question.show',null,'app');
    }

    public function create(){
        loggedIn();
        View::call('question.create',null,'app');
    }


}
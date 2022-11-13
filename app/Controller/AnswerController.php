<?php

namespace App\Controller;


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

}
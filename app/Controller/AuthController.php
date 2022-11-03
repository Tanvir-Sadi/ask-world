<?php

namespace App\Controller;


use Luminous\View\View;

class AuthController
{
    public function index(){
        View::call('index','hi','app');
    }

    public function profile(){
        View::call('profile','hi','app');
    }

}
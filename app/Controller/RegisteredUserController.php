<?php

namespace App\Controller;

use App\Model\User;
use Luminous\Controller\Controller;
use Luminous\Request\Request;
use Luminous\View\View;

class RegisteredUserController extends Controller
{

    public function create(){
        View::call('register',null,'guest');
    }

    public function store(){
        $request = new Request();
        $user = new User();

        $errors = $request->validate([
            'name' => array('string', 'max:255', 'unique:User', 'required'),
            'email' => array('email', 'max:255', 'required', 'unique:User'),
            'password' => array('required', 'confirmed')
        ]);

        if($errors){
            View::call('register',compact('errors'),'guest');
            return;
        }

        $user = $user->create([
            'name'  =>  $request->name,
            'email' =>  $request->email,
            'password'=>password_hash($request->password, PASSWORD_BCRYPT)
        ]);

        $_SESSION['id'] = $user->id;

        if (isset($request->remember_me))
            $user->rememberMe(30);

        header('Location: /', true, 303);
    }
}
<?php

namespace App\Controller;

use App\Model\User;
use Luminous\View\View;
use Luminous\Controller\Controller;


class PackageController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index(){
//        $this->user->create([]);
//
//        $users = $this->user
//                ->query('SELECT * FROM posts')
//                ->fetchAll();

        loggedIn();
        View::call('package.index', null,'app');
    }

    public function show(){
        loggedIn();
        View::call('question.show', null,'app');
    }

    public function create(){
        loggedIn();
        View::call('question.create',null,'app');
    }


}
<?php

use App\Model\User;

/**
 * @return Luminous\Model\Authenticable
 */
function auth(){
    $user = new User();
    if (!isset($_SESSION['id']))
        $user->startAuthSession($_COOKIE['token']);
    return $user->find($_SESSION['id']);
}

function isLoggedIn(){
    return isset($_SESSION['id']);
}

function loggedIn(){
    if(!isset($_SESSION['id'])){
        header('Location: /login', true, 303);
        die();
    }
}
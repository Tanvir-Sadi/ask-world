<?php

use App\Model\User;

function auth(){
    $user = new User();
    $stmt = $user->prepare('SELECT * FROM user WHERE email= :email limit 1');
    $stmt->execute(['email'=>$_SESSION['email']]);
    return $stmt->fetch();
}

function isLoggedIn(){
    return isset($_SESSION['name']) && isset($_SESSION['email']);
}

function loggedIn(){
    if(!(isset($_SESSION['name']) && isset($_SESSION['email']))){
        header('Location: /askWorld/login', true, 303);
        die();
    }
}
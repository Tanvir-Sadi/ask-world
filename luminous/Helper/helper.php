<?php

function auth(){
    return [
        'name'  => $_SESSION['name'] ?? null,
        'email' => $_SESSION['email'] ?? null
    ];
}

function loggedIn(){
    if(!(isset($_SESSION['name']) && isset($_SESSION['email']))){
        header('Location: /askWorld/login', true, 303);
        die();
    }
}
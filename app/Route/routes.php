<?php

use Luminous\Route\Router;

Router::get('/', Router::view('index'));
Router::get('/profile', Router::view('profile'));
Router::any('/404', Router::view('404'));

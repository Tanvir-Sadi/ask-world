<?php

use Luminous\Route\Router;
use App\Controller\AuthController;

Router::get('', [AuthController::class, 'index']);
Router::get('/profile', [AuthController::class, 'profile']);
Router::any('/404', Router::view('404'));

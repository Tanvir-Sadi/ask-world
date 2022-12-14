<?php
session_start();
session_regenerate_id();

use App\Controller\AnswerController;
use App\Controller\RegisteredUserController;
use Luminous\Route\Router;
use App\Controller\AuthController;
use App\Controller\SearchController;
use App\Controller\QuestionController;
use App\Controller\PackageController;


Router::get('/login', [AuthController::class, 'create']);
Router::post('/login', [AuthController::class, 'store']);
Router::get('/logout', [AuthController::class, 'destroy']);

Router::get('/register', [RegisteredUserController::class, 'create']);
Router::post('/register', [RegisteredUserController::class, 'store']);

Router::get('', [QuestionController::class, 'index']);

Router::get('/profile', [AuthController::class, 'profile']);
Router::get('/search', [SearchController::class, 'index']);

Router::get('/question', [QuestionController::class, 'index']);
Router::post('/question', [QuestionController::class, 'store']);
Router::get('/question/create', [QuestionController::class, 'create']);
Router::get('/question/$question', [QuestionController::class, 'show']);

Router::post('/question/$question/answer',[AnswerController::class, 'store']);

Router::post('/package', [PackageController::class, 'store']);
Router::get('/package', [PackageController::class, 'index']);
Router::get('/package/history', [PackageController::class, 'history']);

Router::post('/notify', [PackageController::class, 'webhook']);

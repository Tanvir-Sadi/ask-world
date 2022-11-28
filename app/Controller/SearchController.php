<?php

namespace App\Controller;

use App\Model\Question;
use Luminous\Request\Request;
use Luminous\Controller\Controller;

class SearchController extends Controller
{
    public function index(){
        loggedIn();
        $request = new Request();
        $question = new Question();
        $stmt = $question->query("SELECT title, id FROM question where title LIKE '%".$request->q."%' LIMIT 10");
        $questions = $stmt->fetchAll();
        echo json_encode($questions);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = [
            ['name' => 'Quiz 1', 'photo' => 'storage/cat.jpg', 'status' => 'completed'],
            ['name' => 'Quiz 2', 'photo' => 'storage/dog.jpg', 'status' => 'pending'],
        ];

        return view('home', ['quizzes' => $quizzes]);
    }

}

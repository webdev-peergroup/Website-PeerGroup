<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class QuizViewController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'quiz',
            'deskripsi' => 'quiz',
            'css' => 'artikel.css'
        ];
        return view('Frontend/quiz/index', $data);
    }
}

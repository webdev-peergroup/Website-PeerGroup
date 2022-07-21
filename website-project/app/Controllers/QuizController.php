<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\QuizModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;
use App\Models\LoginModel;
class QuizController extends BaseController
{
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new QuizModel();
        $this->user = new LoginModel();
    }
    public function index()
    {
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $title = $this->get->gettitle();
        // dd($title);/
        $data = [
            'title' => 'Quiz',
            'title' => $title,
            'validation' => \Config\Services::validation()
        ];
        return view('Backend/dashboard/quiz/index',$data);
    }
    public function detailQuiz($id){
            $quiz_title = $this->get->gettitle($id);
            $quiz_soal = $this->get->getsoalDetail($id);
            $quiz_jwb = $this->get->getjwbanDetail($id);
            $data = [
                'title' => 'Quiz',
                'quiz' => $quiz_title,
                'soal' => $quiz_soal,
                'jwb' => $quiz_jwb,
                'deskripsi' => 'ini quiz',
                'css' => 'quiz.css',
                'validation' => \Config\Services::validation()
            ];

        return view('Backend/dashboard/quiz/detail', $data);
    }
}
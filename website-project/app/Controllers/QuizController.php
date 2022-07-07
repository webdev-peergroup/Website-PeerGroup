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
        $title = $this->get->getTitle();
        // dd($title);/
        $data = [
            'title' => 'Quiz',
            'title' => $title,
            'validation' => \Config\Services::validation()
        ];
        return view('Backend/dashboard/quiz/index',$data);
    }
    public function detailQuiz($id){
        // dd($idQuiz);
        $detail = $this->get->getSoal($id);
        $jawaban = $this->get->getJawaban($id);
        // dd($jawaban);
        $data = [
            'title' => 'Detail',
            'detail' => $detail,
            'jawaban' => $jawaban,
            'validation' => \Config\Services::validation()
        ];
        // dd($detail);
        // dd($data);
        return view('Backend/dashboard/quiz/detail', $data);
    }
}
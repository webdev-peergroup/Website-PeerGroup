<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;
use App\Models\QuizModel;

class QuizController extends BaseController
{
    //Global Constructor
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new QuizModel();
        $this->user = new LoginModel();
        // $this->kegiatan = new KegiatanModel();
    }

    // public function index()
    // {
    //     $session = session();
    //     if ($session->logged_in != TRUE) {
    //         return redirect()->to('/login');
    //     }
    //     $title = $this->get->gettitle();
    //     $data = [
    //         'title' => 'Quiz',
    //         'detail' => $title,
    //         'validation' => \Config\Services::validation()
    //     ];

    //     return view('Backend/dashboard/quiz/adminArtikelindex', $data);
    // }

    public function detailQuiz($id){
        $detail = $this->get->getsoal($id);
        $jawaban = $this->get->getjwban($id);
        $data = [
            'title' => 'Detail',
            'detail' => $detail,
            'jawaban' => $jawaban,
            'validation' => \Config\Services::validation()
        ];

        return view('Backend/dashboard/quiz/detail', $data);
        // $cover=$row->cover;
        // If default.svg
        
    }
    // public function tambah_data(){
    //     $penulis = $this->user->penulis();
    //     $data = [
    //         'title' => 'Tambah Artikel',
    //         'penulis' => $penulis,
    //         'validation' => \Config\Services::validation()
    //     ];

    //     return view('Apps/form_artikel', $data);
    // }
}

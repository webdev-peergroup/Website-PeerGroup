<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KegiatanModel;
use App\Models\QuizModel;

class Home extends BaseController
{
    //Global Constructor
    protected $get;
    protected $getkegiatan;
    protected $deskripsi;
    protected $dark;
    protected $getquiz;

    public function __construct(){
        $this->get = new ArtikelModel();
        $this->getquiz = new QuizModel();
        $this->getkegiatan = new KegiatanModel();
        $this->deskripsi = 'Self-development bukan hanya pengetahuan, tetapi kebutuhan. Yuk, bergabung bersama pemuda lainnya untuk temukan potensimu, belajar fokus pada kelebihanmu...';
        $this->dark = '';
    }

    //Index
    public function index()
    {
        $selfdev = $this->get->getnewartikel('self development');
        $karir = $this->get->getnewartikel('karir');
        $jurusan = $this->get->getnewartikel('jurusan');
        $kegiatan = $this->getkegiatan->getdatakegiatan();
        $data = [
            'title' => 'Peer Group ID - Sebuah Website Pengembangan Potensi Diri',
            'deskripsi' => $this->deskripsi,
            'selfdev' => $selfdev,
            'karir' => $karir,
            'jurusan' => $jurusan,
            'kegiatan' => $kegiatan,
            'css' => 'index.css',
            'dark' => $this->dark
        ];
        return view('Frontend/index', $data);
    }
    //Detail Artikel
    public function detart($id){
        // dd($id);
        $list = $this->get->getartikel($id);
        // $deskripsi = $this->get->getmetadeskripsiartikel($id);
        $random = $this->get->getrandomartikel();
        foreach ($list->getResult() as $meta) {
            $title = $meta->judul;
            $desk = $meta->deskripsi;
        }
        // dd($title = $meta->cover);
        $data = [
            // dd($title);
            'title' => $title,
            'deskripsi' => $desk,
            'artikel' => $list,
            'css' => 'detailartikel.css',
            'rekomen' => $random
        ];
        // dd($title);
        return view('Frontend/artikel/detail-artikel', $data);
    }

    //Halaman Artikel
    public function artikel($e){
        $css = 'artikel.css';
        $random = $this->get->getrandomartikel();
        if ($e == 'self') {
            $getartikel = $this->get->getdataartikel('self development');
            $data = [
                'title' => 'Artikel Self Development',
                'kategori' => 'Self Development',
                'deskripsi' => 'Artikel tentang Self Development ada disini.',
                'artikel' => $getartikel,
                'css' => $css,
                'rekomen' => $random
            ];
        }elseif ($e == 'jurusan') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel Jurusan',
                'kategori' => 'Jurusan',
                'deskripsi' => 'Artikel tentang Jurusan ada disini.',
                'artikel' => $getartikel,
                'css' => $css,
                'rekomen' => $random
            ];
        }elseif ($e == 'karir') {
            $getartikel = $this->get->getdataartikel($e);
            $data = [
                'title' => 'Artikel Karir',
                'kategori' => 'Karir',
                'artikel' => $getartikel,
                'deskripsi' => 'Artikel tentang Karir ada disini.',
                'css' => $css,
                'rekomen' => $random
            ];
        }
        
        return view('Frontend/artikel/artikel', $data);
    }

    //About
    public function about(){
        $data = [
            'title' => 'About Us',
            'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik...',
            'css' => 'about.css'
        ];

        return view('Frontend/about', $data);
    }
    
    //Landing
    public function landing(){
        $data = [
            'title' => 'Welcome to Peer Group ID',
            'deskripsi' => 'Landing Page',
            'css' => 'landing.css'
        ];

        return view('Frontend/landing', $data);
    }
    
    //kegiatan kami
    public function kegiatan_kami(){
        $random = $this->getkegiatan->getrandomkegiatan();
        $data = [
            'title' => 'Kegiatan Kami',
            'deskripsi' => 'Kegiatan Kami',
            'css' => 'kegiatan_kami.css',
            'rekomen' => $random
        ];

        return view('Frontend/kegiatanKami/KegiatanKami', $data);
    }

    //volunteer
    public function volunteer(){
        $data = [
            'title' => 'Volunteer',
            'deskripsi' => 'Volunteer',
            'css' => 'volunteer.css'
        ];

        return view('Frontend/kegiatanKami/volunteer', $data);
    }
    public function quiz(){
            $quiz_title = $this->getquiz->gettitle();
            $quiz_soal = $this->getquiz->getsoal();
            $quiz_jwb = $this->getquiz->getjwban();
            $data = [
                'title' => 'Quiz',
                'quiz' => $quiz_title,
                'soal' => $quiz_soal,
                'jwb' => $quiz_jwb,
                'deskripsi' => 'ini quiz',
                'css' => 'quiz.css'
            ];
        
        return view('Frontend/quiz/index', $data);
    }

    public function detquiz($id){
        // dd($id);
        echo $id;
        $list = $this->getquiz->getsoal($id);
        foreach ($list->getResult() as $meta) {
            $title = $meta->judul;
            $desk = $meta->deskripsi;
        }
        $data = [
            'title' => $title,
            'deskripsi' => $desk,
            'quiz' => $list,
        ];

        return view('Frontend/quiz/detail-quiz', $data);
    }

    public function event(){
        $random = $this->getkegiatan->getrandomkegiatan();
        $getevent = $this->getkegiatan->getdatakegiatan();
        $data = [
            'title' => 'Artikel Kegiatan',
            'deskripsi' => 'Artikel kegiatan ada disini.',
            'event' => $getevent,
            'css' => 'artikel.css',
            'rekomen' => $random
        ];
        
        return view('Frontend/kegiatanKami/event', $data);
    }

    public function detevent($id){
        $list = $this->getkegiatan->getkegiatan($id);
        $random = $this->getkegiatan->getrandomkegiatan();
        foreach ($list->getResult() as $meta) {
            $title = $meta->judul;
            $desk = $meta->deskripsi;
        }
        $data = [
            'title' => $title,
            'deskripsi' => $desk,
            'event' => $list,
            'css' => 'detailartikel.css',
            'rekomen' => $random
        ];

        return view('Frontend/kegiatanKami/detail-event', $data);
    }
}

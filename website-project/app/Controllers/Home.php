<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class Home extends BaseController
{
    //Global Constructor
    protected $get;
    protected $getkegiatan;
    protected $deskripsi;
    protected $dark;
    public function __construct(){
        $this->get = new ArtikelModel();
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
            'title' => 'Siapa Kita ?',
            'deskripsi' => 'Peer Group ID merupakan platform paling tepat bagi para pemuda yang ingin mengembangkan diri lewat potensi yang dimiliki dengan berbagai kegiatan menarik...',
            'css' => 'about.css'
        ];

        return view('Frontend/about', $data);
    }
    
    //Landing
    public function landing(){
        $data = [
            'title' => 'Landing',
            'deskripsi' => 'Landing Page',
            'css' => 'landing.css'
        ];

        return view('Frontend/landing', $data);
    }
    
    //kegiatan kami
    public function kegiatan_kami(){
        $data = [
            'title' => 'Kegiatan Kami',
            'deskripsi' => 'Kegiatan Kami',
            'css' => 'kegiatan_kami.css'
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
}

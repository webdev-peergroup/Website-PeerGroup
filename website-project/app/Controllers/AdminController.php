<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class AdminController extends BaseController
{
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->user = new LoginModel();
        $this->kegiatan = new KegiatanModel();
    }
    public function index()
    {
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $allpost = $this->get->getallpost();
        $getkegiatan = $this->kegiatan->getadminkegiatan();
        $data = [
            'title' => 'Admin Panel',
            'allpost' => $allpost,
            'kegiatan' => $getkegiatan,
            'validation' => \Config\Services::validation()
        ];
        return view('Backend/dashboard/index', $data);
    }
}

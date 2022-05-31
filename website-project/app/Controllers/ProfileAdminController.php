<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class ProfileAdminController extends BaseController
{
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->user = new LoginModel();
        $this->kegiatan = new KegiatanModel();
    }
    public function profile()
    {
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $user = $session->username;
        $dataUser = $this->user->where(['username' => $user])->first();
        $data = [
            'title' => 'Profile',
            'username' => $dataUser->username,
            'password' => $dataUser->password,
            'nama' => $dataUser->nama,
            'id' => $dataUser->id_user,
            'gender' => $dataUser->gender,
            'foto' => $dataUser->foto,
            'validation' => \Config\Services::validation()
        ];
        return view('Apps/profil_admin',$data);
    }
}

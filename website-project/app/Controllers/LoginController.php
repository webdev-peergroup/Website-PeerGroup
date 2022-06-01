<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;

class LoginController extends BaseController
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
        $data = [
            'deskripsi' => 'Login Admin Peer Group ID'
        ];
        return view('Frontend/login/index', $data);
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $dataUser = $this->user->where(['username' => $username])->first();

        if ($dataUser) {
            if ($password === $dataUser->password) {
                $session = session();
                $session->set([
                    'username' => $dataUser->username,
                    'panggilan' => $dataUser->panggilan,
                    'foto' => $dataUser->foto,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('admin-panel'));
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}

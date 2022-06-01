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
        return view('Backend/dashboard/profile/index',$data);
    }

    public function update_profile($id){
        //Ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // dd($fileFoto);

        //Check gambar apakah di upload
        if ($fileFoto->getError() == 4) {
            $profile = 'default.png';
        }else {
            //Pindah gambar
            $fileFoto->move('assets/images/profile');
            //Ambil nama gambar
            $profile = $fileFoto->getName();
        }      
		$this->user->save([
            'id_user' => $id,
			'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('name'),
            'gender' => $this->request->getVar('gender'),
            'foto' => $profile
		]);
        $session = session();
        $session->set([
            'username' => $this->request->getVar('username'),
            'name' => $this->request->getVar('name'),
            'foto' => $profile
        ]);
        return redirect()->to('profile');
    }
}

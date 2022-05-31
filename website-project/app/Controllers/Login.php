<?php

namespace App\Controllers;
 
use App\Models\LoginModel;
use App\Models\ArtikelModel;
use App\Models\KegiatanModel;
class Login extends BaseController
{
    public function index()
    {
        $data = [
            'deskripsi' => 'Login Admin Peer Group ID'
        ];
        return view('Apps/new_login', $data);
    }
    
    //Global Constructor
    protected $get;
    protected $user;
    protected $kegiatan;
    public function __construct(){
        $this->get = new ArtikelModel();
        $this->user = new LoginModel();
        $this->kegiatan = new KegiatanModel();
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

    //Management Konten
    public function admin(){
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
        return view('Apps/admin_panel', $data);
    }

    
    //Artikel
    public function artikel(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $artikel = $this->get->getadminartikel();
        $data = [
            'title' => 'Artikel',
            'artikel' => $artikel,
            'validation' => \Config\Services::validation()
        ];

        return view('Apps/new_admin_artikel', $data);
    }

    public function hapus_artikel($id){
        $artikel = $this->get->findCover($id);
        $row = $artikel->getRow();
        $cover=$row->cover;
        // If default.svg
        if ($cover != 'default.svg') {
            //Hapus gambar
            unlink('assets/images/artikel/' . $cover);
        }
        $this->get->delete($id);
		return redirect()->back();
    }

    public function hapus_kegiatan($id){
        $kegiatan = $this->kegiatan->findCover($id);
        $row = $kegiatan->getRow();
        $cover=$row->cover;
        // If default.svg
        if ($cover != 'default.svg') {
            //Hapus gambar
            unlink('assets/images/artikel/' . $cover);
        }
        $this->kegiatan->delete($id);
		return redirect()->back();
    }

    public function tambah_data(){
        $penulis = $this->user->penulis();
        $data = [
            'title' => 'Tambah Artikel',
            'penulis' => $penulis,
            'validation' => \Config\Services::validation()
        ];

        return view('Apps/form_artikel', $data);
    }

    public function simpan(){
        // dd($this->request->getVar());
        //Validation
        if (!$this->validate([
            'judul' => [
                'rules'=>'required|is_unique[artikel.judul]',
                'rules'=>'required|is_unique[kegiatan.judul]',
                'errors' =>[
                    'is_unique' => 'Judul sudah ada'
                ]
            ],
            'cover' => [
                'rules' => 'max_size[cover,5120]|is_image[cover]|mime_in[cover,image/jpg,image/jpeg,image/png,image/svg+xml]',
                'errors' => [
                    'max_size' => 'Upload maksimal 5 MB',
                    'is_image' => 'Yang anda upload bukan gambar',
                    'mime_in' => 'Yang anda upload bukan gambar'
                ]
            ]    
                    
        ])) {
            // $validation = \Config\Services::validation();   
            return redirect()->to(base_url('admin-panel'))->withInput();
        }
        //Ambil gambar
        $fileCover = $this->request->getFile('cover');
        // dd($fileCover);
        if ($fileCover->getError() == 4) {
            $coverName = 'default.svg';
        }
        else{
            $coverName = $fileCover->getRandomName();
            $fileCover->move('images/artikel',$coverName);
        }
        
        $slug = url_title($this->request->getVar('judul'), '-', true);
        //Simpan
        if($this->request->getVar('kategori') === 'kegiatan'){
            $this->kegiatan->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'cover' => $coverName,
                'sumber_cover' => $this->request->getVar('sumber_cover'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'penulis' => $this->request->getVar('name'),
                'kategori' => $this->request->getVar('kategori'),
                'text' => $this->request->getVar('content')
            ]);
            return redirect()->to(base_url('kegiatan-admin'));
        }else{
            $this->get->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'cover' => $coverName,
                'sumber_cover' => $this->request->getVar('sumber_cover'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'penulis' => $this->request->getVar('name'),
                'kategori' => $this->request->getVar('kategori'),
                'text' => $this->request->getVar('content')
            ]);
            return redirect()->to(base_url('admin-panel'));
        }
	}

    public function edit_artikel($id) {
        $edit = $this->get->getartikel($id);
        
        $data = [
			'title' => 'Edit Artikel',
			'tampil' => $edit,
            
            'validation' => \Config\Services::validation()
		];

		return view('Apps/new_edit_form', $data);
    }
    public function edit_kegiatan($id) {
        $edit = $this->kegiatan->getkegiatan($id);
        
        $data = [
			'title' => 'Edit Kegiatan',
			'tampil' => $edit,
            
            'validation' => \Config\Services::validation()
		];

		return view('Apps/new_edit_form', $data);
    }
    
    public function update($id){
        //Ambil gambar
        $fileCover = $this->request->getFile('cover');
        // dd($fileCover);

        //Check gambar apakah di upload
        if ($fileCover->getError() == 4) {
            $coverName = 'default.svg';
        }else {
            //Pindah gambar
            $fileCover->move('images/artikel');
            //Ambil nama gambar
            $coverName = $fileCover->getName();
        }
        if ($this->request->getVar('kategori') === 'kegiatan') {
            $this->kegiatan->save([
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'cover' => $coverName,
                'sumber_cover' => $this->request->getVar('sumber_cover'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'kategori' => $this->request->getVar('kategori'),
                'text' => $this->request->getVar('content')
            ]);
        }else{
            $this->get->save([
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'cover' => $coverName,
                'sumber_cover' => $this->request->getVar('sumber_cover'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'kategori' => $this->request->getVar('kategori'),
                'text' => $this->request->getVar('content')
            ]);
        }
        return redirect()->to('artikel-admin');
    }

    //Kegiatan
    public function kegiatan(){
        $session = session();
        if ($session->logged_in != TRUE) {
            return redirect()->to('/login');
        }
        $getkegiatan = $this->kegiatan->getadminkegiatan();
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => $getkegiatan,
            'validation' => \Config\Services::validation()
        ];
        return view('Apps/kegiatan_admin', $data);
    }

    //Ajax request
    public function ajax($date){
        $ajax = $this->get->getpostajax($date);
        $data = [
            'allpost' => $ajax,
        ];
        
        return view('Apps/ajax', $data);
    }

    public function ajax2(){
        $allpost = $this->get->getallpost();
        $data = [
            'allpost' => $allpost
        ];
        
        return view('Apps/ajax', $data);
    }
    public function ajaxKegiatan($date){
        $ajax2 = $this->kegiatan->getkegiatanwhere($date);
        $data = [
            'allpost' => $ajax2
        ];
        
        return view('Apps/ajax', $data);
    }

    public function ajaxKegiatan2(){
        $getkegiatan = $this->kegiatan->getadminkegiatan();
        $data = [
            'allpost' => $getkegiatan
        ];
        
        return view('Apps/ajax', $data);
    }
    
}

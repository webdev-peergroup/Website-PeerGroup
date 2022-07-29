<?php

namespace App\Models;

use CodeIgniter\Model;

class KegiatanModel extends Model
{
    protected $table = 'kegiatan';
    protected $allowedFields = ['judul', 'slug','penulis', 'deskripsi', 'text', 'cover', 'time'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    //Get Kegiatan for index
    public function getdatakegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan");
        return $query;
    }
    
    //get admin kegiatan
    public function getadminkegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan ORDER BY created_at DESC");
        return $query;
    }

    public function getrandomkegiatan(){
        $query = $this->db->query("SELECT * FROM kegiatan ORDER BY RAND() LIMIT 6");
        return $query;
    }

    public function getkegiatanwhere($date){
        $query = $this->db->query("SELECT * FROM kegiatan Where created_at LIKE '%$date%'");
        return $query;
    }

    //Get detail kegiatan
    public function getkegiatan($slug) {
        $query = $this->db->query("SELECT * FROM kegiatan Where slug = '$slug'");
        return $query;
    }
    public function findCover($id){
        $query = $this->db->query("SELECT cover FROM kegiatan Where id = '$id'");
        return $query;
    }
}
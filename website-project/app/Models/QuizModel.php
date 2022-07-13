<?php

namespace App\Models;

use CodeIgniter\Model;

class QuizModel extends Model
{
    // protected $table = 'title';
    protected $allowedFields = ['id_title', 'title'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }

    public function gettitle(){
        $query = $this->db->query("SELECT * FROM title");
        return $query;
    }
    
    public function getsoal(){
        $query = $this->db->query("SELECT * FROM soal");
        return $query;
    }
    
    public function getjwban(){
        $query = $this->db->query("SELECT * FROM jwb");
        return $query;
    }
}
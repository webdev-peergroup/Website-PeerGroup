<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\TitleModel;
use PHPUnit\TextUI\XmlConfiguration\Group;

class QuizModel extends Model
{
    // protected $table = 'title';
    // protected $allowedFields = ['id_title', 'title'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
    //GET
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
    public function getsoalDetail($id){
        $query = $this->db->query("SELECT * FROM soal inner join jwb on jwb.id_soal = soal.id_soal where soal.id_title = '$id'");
        return $query;
    }
    
    public function getjwbanDetail($id){
        $query = $this->db->query("SELECT * FROM jwb join soal on soal.id_soal = jwb.id_soal where jwb.id_title = '$id'");
        return $query;
    }
}

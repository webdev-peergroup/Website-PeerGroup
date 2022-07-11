<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\TitleModel;
use PHPUnit\TextUI\XmlConfiguration\Group;

class QuizModel extends Model
{
    // protected $table            = 'title';
    // protected $allowedFields    = ['id','title'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
    
    public function getTitle(){
        $query = $this->db->query("select * from title");
        return $query;
    }
    
    public function getSoal($id){
        $query = $this->db->query("SELECT * FROM quiz WHERE id_title = '$id' ");
        // $data = $query->getResultArray();
        return $query;
    }
                
    public function getJawaban($idQuiz){
        $query = $this->db->query("SELECT * FROM jawaban where id_quiz = '$idQuiz'");
        // $data = $query->getResultArray();
        return $query;
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\TitleModel;
use PHPUnit\TextUI\XmlConfiguration\Group;

class QuizModel extends Model
{
    // protected $table            = 'title';
    protected $allowedFields    = ['id','title'];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
    
    public function getTitle(){
        $query = $this->db->query("select * from title");
        return $query;
    }
    // public function detail($id){ 
    //     $param = array('id'=>$id);
    //     return $this->db->get_where('title',$param);
    // }
    // public function getDetail($id){
    //     $query = $this->db->query("SELECT quiz.soal,quiz.sroce,jawaban.jawaban FROM quiz JOIN jawaban ON jawaban.id_quiz = quiz.id  WHERE quiz.id_title = '$id' GROUP BY soal,sroce");
    //     $data = $query->getResultArray();
    //     return $data;
    // }
    public function getSoal($id){
        $query = $this->db->query("SELECT * FROM quiz WHERE id_title = '$id' ");
        // $data = $query->getResultArray();
        return $query;
    }

    // public function getSoalDanJawaban($id){
    //     $query = $this->db->query("SELECT * FROM quiz right join jawaban on quiz.id = jawaban.id_quiz WHERE quiz.id_title = '$id'");
    //     $data = $query->getResultArray();
    //     return $data;
    // }
    public function getJawaban($idQuiz){
        $query = $this->db->query("SELECT * FROM jawaban where id_quiz = '$idQuiz'");
        // $data = $query->getResultArray();
        return $query;
    }
}

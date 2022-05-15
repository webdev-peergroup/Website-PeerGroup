<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = "id_user";
    protected $returnType = "object";
    protected $allowedFields = ['username','password', 'nama', 'panggilan', 'gender', 'foto'];

    public function login($data){
        $query = $this->db->query("SELECT * FROM user Where username = '$data'");
        return $query;
    }

    public function penulis(){
        $query = $this->db->query("SELECT nama FROM user ");
        return $query;
    }
}
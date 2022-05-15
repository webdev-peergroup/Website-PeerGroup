<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'log';
    // protected $primaryKey = "";
    protected $returnType = "object";
    protected $allowedFields = ['username','kegiatan', 'time'];

    public function addLog($username, $kegiatan){
        $query = $this->db->query("INSERT INTO log (username, kegiatan, time) VALUES ('$username','$kegiatan')");
        return $query;
    }

    public function getLog($date){
        $query = $this->db->query("SELECT * FROM log WHERE time = '$date' LIMIT 3");
        return $query;   
    }
}
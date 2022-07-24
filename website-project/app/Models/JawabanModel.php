<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\QuizModel;

class JawabanModel extends Model
{
    protected $table            = 'jawaban';
    protected $allowedFields    = [];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
}

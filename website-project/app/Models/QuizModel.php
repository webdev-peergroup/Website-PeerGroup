<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\TitleModel;

class QuizModel extends Model
{
    // protected $table            = 'quiz';
    // protected $allowedFields    = [];
    // protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
}

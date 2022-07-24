<?php

namespace App\Models;

use CodeIgniter\Model;

class TitleModel extends Model
{
    protected $table            = 'title';
    protected $allowedFields    = [];
    protected $db;
    public function __construct(){
        $this->db = db_connect();
    }
}

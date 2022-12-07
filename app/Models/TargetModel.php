<?php

namespace App\Models;

use CodeIgniter\Model;

class TargetModel extends Model
{
    protected $table      = 'target_pembelajaran';
    protected $primaryKey = 'id_target';
    protected $returnType = 'array';
    protected $allowedFields = ['id_target', 'target', 'id_modul'];
    protected $useTimestamps = false;
}

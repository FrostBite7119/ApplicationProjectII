<?php

namespace App\Models;

use CodeIgniter\Model;

class SubModulModel extends Model
{
    protected $table      = 'sub_modul';
    protected $primaryKey = 'id_sub_modul';
    protected $returnType = 'array';
    protected $allowedFields = ['id_sub_modul', 'sub_modul', 'id_modul'];
    protected $useTimestamps = false;
}

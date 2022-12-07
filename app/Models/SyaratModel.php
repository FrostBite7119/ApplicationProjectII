<?php

namespace App\Models;

use CodeIgniter\Model;

class SyaratModel extends Model
{
    protected $table      = 'persyaratan';
    protected $primaryKey = 'id_persyaratan';
    protected $returnType = 'array';
    protected $allowedFields = ['id_persyaratan', 'persyaratan', 'id_modul'];
    protected $useTimestamps = false;
}

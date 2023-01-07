<?php

namespace App\Models;

use CodeIgniter\Model;

class KursusSayaModel extends Model
{
    protected $table      = 'kursus_saya';
    protected $primaryKey = 'id_kursus_saya';
    protected $returnType = 'array';
    protected $allowedFields = ['id_kursus_saya', 'id_modul', 'email'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'id_modul' => 'required',
        'email' => 'required',
    ];
}

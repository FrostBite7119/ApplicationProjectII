<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table      = 'materi';
    protected $primaryKey = 'id_materi';
    protected $returnType = 'array';
    protected $allowedFields = ['id_materi', 'judul_materi', 'isi_materi', 'id_sub_modul', 'level'];
    protected $useTimestamps = false;
}

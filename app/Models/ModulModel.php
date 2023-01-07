<?php

namespace App\Models;

use CodeIgniter\Model;

class ModulModel extends Model
{
    protected $table      = 'modul';
    protected $primaryKey = 'id_modul';
    protected $returnType = 'array';
    protected $allowedFields = ['id_modul', 'judul_modul', 'level', 'id_kategori', 'deskripsi','email', 'cover'];
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $updatedField = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'judul_modul' => 'required',
        'id_kategori' => 'required',
        'level' => 'required',
        'deskripsi' => 'required'
    ];
}

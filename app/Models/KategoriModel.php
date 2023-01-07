<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $returnType = 'array';
    protected $allowedFields = ['id_kategori', 'nama_kategori'];
    protected $useTimestamps = false;
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'nama_kategori' => 'required'
    ];
}

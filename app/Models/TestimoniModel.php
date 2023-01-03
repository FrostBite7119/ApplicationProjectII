<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table      = 'testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $returnType = 'array';
    protected $allowedFields = ['profile','deskripsi', 'nama', 'bidang'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'profile' => [
            'rules' => 'uploaded[profile]|is_image[profile]|mime_in[profile,image/jpg,image/png,image/jpeg,]',
            'errors' => [
                'uploaded' => 'Profile Belum Di isi'
            ]
        ],
        'deskripsi' => 'required',
        'nama' => 'required',
        'bidang' => 'required'  
    ];
}
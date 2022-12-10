<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'email';
    protected $returnType = 'array';
    protected $allowedFields = ['nama', 'email', 'password', 'no_telepon', 'alamat', 'level'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'nama' => 'required',
        'email' => [
            'rules' => 'required|is_unique[user.email]',
            'errors' => [
                'is_unique' => 'Email sudah digunakan'
            ]
        ],
        'password' => 'required',
        'no_telepon' => 'required',
        'alamat' => 'required'
    ];
}

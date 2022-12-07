<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'email';
    protected $returnType = 'array';
    protected $allowedFields = ['nama', 'email', 'password', 'no_telepon', 'alamat', 'level', 'role'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'no_telepon' => 'required',
        'alamat' => 'required'
    ];
}

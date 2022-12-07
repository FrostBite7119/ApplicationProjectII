<?php

namespace App\Models;

use CodeIgniter\Model;

class EditorModel extends Model
{
    protected $table      = 'editor';
    protected $primaryKey = 'id_editor';
    protected $returnType = 'array';
    protected $allowedFields = ['id_editor', 'email', 'status', 'id_modul'];
    protected $useTimestamps = false;
}

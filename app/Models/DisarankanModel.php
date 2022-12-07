<?php

namespace App\Models;

use CodeIgniter\Model;

class DisarankanModel extends Model
{
    protected $table      = 'disarankan';
    protected $primaryKey = 'id_disarankan';
    protected $returnType = 'array';
    protected $allowedFields = ['id_disarankan', 'disarankan', 'id_modul'];
    protected $useTimestamps = false;
}

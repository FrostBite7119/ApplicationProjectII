<?php

namespace App\Models;

use CodeIgniter\Model;

class LanggananModel extends Model
{
    protected $table      = 'langganan';
    protected $primaryKey = 'id_langganan';
    protected $returnType = 'array';
    protected $allowedFields = ['lama', 'rentang', 'biaya_langganan', 'diskon', 'waktu_diskon'];
    protected $useTimestamps = false;
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'lama' => 'required',
        'rentang' => 'required',
        'biaya_langganan' => 'required'  
    ];
}

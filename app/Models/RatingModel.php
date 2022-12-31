<?php

namespace App\Models;

use CodeIgniter\Model;

class RatingModel extends Model
{
    protected $table      = 'rating';
    protected $primaryKey = 'id_rating';
    protected $returnType = 'array';
    protected $allowedFields = ['id_rating', 'rating', 'id_modul', 'email'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'rating' => 'required',
        'id_modul' => 'required',
        'email' => 'required'
    ];
}

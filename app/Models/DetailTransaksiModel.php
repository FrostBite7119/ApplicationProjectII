<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailTransaksiModel extends Model
{
    protected $table      = 'detail_transaksi';
    protected $primaryKey = 'id_detail_transaksi';
    protected $returnType = 'array';
    protected $allowedFields = ['id_detail_transaksi', 'nama_transaksi', 'jumlah_transaksi', 'id_history'];
    protected $useTimestamps = false;

    protected $validationRules = [
        'nama_transaksi' => 'required',
        'jumlah_transaksi' => 'required',
        'id_history' => 'required'
    ];
}

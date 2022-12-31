<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoryPembelianModel extends Model
{
    protected $table      = 'history_pembelian';
    protected $primaryKey = 'id_history';
    protected $returnType = 'array';
    protected $allowedFields = ['id_history', 'tanggal_pembelian', 'bukti_pembayaran', 'status', 'tanggal_berlaku','email', 'id_langganan', 'deleted_at'];
    protected $useTimestamps = false;
    protected $useSoftDeletes = true;
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        'tanggal_pembelian' => 'required',
        'bukti_pembayaran' => [
            'rules' => 'uploaded[bukti_pembayaran]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/jpg,image/png,image/jpeg,]',
            'errors' => [
                'uploaded' => 'Bukti pembayaran belum di-upload'
            ]
        ],
        'email' => 'required',
        'id_langganan' => 'required'
    ];
}

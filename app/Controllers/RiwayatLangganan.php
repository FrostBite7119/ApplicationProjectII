<?php

namespace App\Controllers;

use App\Models\UserModel;

class RiwayatLangganan extends BaseController
{
    public function index()
    {
        return view('user/riwayat_langganan');
    }
}

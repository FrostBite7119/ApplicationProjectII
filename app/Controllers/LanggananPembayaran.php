<?php

namespace App\Controllers;

use App\Models\UserModel;

class LanggananPembayaran extends BaseController
{
    public function index()
    {
        return view('user/langganan_pembayaran');
    }
}

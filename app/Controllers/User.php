<?php

namespace App\Controllers;

use App\Models\ModulModel;
use App\Models\TargetModel;
use App\Models\SyaratModel;
use App\Models\DisarankanModel;
use App\Models\SubModulModel;
use App\Models\MateriModel;
use App\Models\UserModel;
use App\Models\EditorModel;

class User extends BaseController
{
    public function index(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->to(base_url());
        }

        return view('user/home');
    }
}
<?php

namespace App\Controllers;

use App\Models\UserModel;

class SettingProfile extends BaseController
{
    public function index()
    {
        return view('user/settings_profile');
    }
}

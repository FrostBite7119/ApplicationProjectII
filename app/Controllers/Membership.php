<?php

namespace App\Controllers;


class Membership extends BaseController
{
    public function index(){
        // if (session()->get('role') !== 'user') { // jika bukan admin
        //     return redirect()->to(base_url());
        // }

        return view('user/membership');
    }
}
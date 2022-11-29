<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function home(){
        return view('user/home');
    }

    public function courseDetail(){
        return view('user/course_detail');
    }

    public function search(){
        return view('user/search');
    }
}

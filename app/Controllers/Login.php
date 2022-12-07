<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index(){
        if(session()->get('role') == 'admin'){
            return redirect()->to('admin');
        }

        return view('admin/login_view');
    }

    public function process(){
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $dataUser = $userModel->find($email);

        if($dataUser){
            $password = $this->request->getPost('password');
            if($password == $dataUser['password']){
                session()->set([
                    'email' => $dataUser['email'],
                    'nama' => $dataUser['nama'],
                    'role' => $dataUser['role']
                ]);

                return redirect()->to('admin');
            }
        }

        session()->setFlashData('error', 'Email atau Password Salah');
        return redirect()->back();
    }

    public function logout(){
        session()->destroy();
        return redirect()->route('admin/login');
    }
}

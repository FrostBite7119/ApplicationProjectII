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

        $email = $this->request->getPost('email');
        $dataUser = $userModel->find($email);

        if($dataUser){
            $password = $this->request->getPost('password');
            if(password_verify($password, $dataUser['password'])){
                session()->set([
                    'email' => $dataUser['email'],
                    'nama' => $dataUser['nama'],
                    'role' => $dataUser['role']
                ]);

                if($dataUser['role'] == "user"){
                    return redirect()->to(base_url('user'));
                }else{
                    return redirect()->to(base_url());
                }
            }
        }

        session()->setFlashData('errorLogin', 'Email atau Password Salah');
        return redirect()->to(base_url());
    }

    public function processAdmin(){
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $dataUser = $userModel->find($email);

        if($dataUser){
            $password = $this->request->getPost('password');
            if(password_verify($password, $dataUser['password'])){
                session()->set([
                    'email' => $dataUser['email'],
                    'nama' => $dataUser['nama'],
                    'role' => $dataUser['role']
                ]);

                if($dataUser['role'] == "admin"){
                    return redirect()->to(base_url('admin'));
                }else{
                    return redirect()->to(base_url());
                }
            }
        }

        session()->setFlashData('errorLogin', 'Email atau Password Salah');
        return redirect()->route('admin/login');
    }

    public function logout(){
        session()->destroy();
        return redirect()->route('admin/login');
    }
}

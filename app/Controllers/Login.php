<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ModulModel;

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

        // Cek Langganan
        $userModel->where('expired_date <', date('Y-m-d'))->set(['level'=> 1,'expired_date' => null])->update();

        $email = $this->request->getPost('email');
        $dataUser = $userModel->find($email);
        
        if($dataUser){ 
            $password = $this->request->getPost('password');
            if(password_verify($password, $dataUser['password'])){
                if($dataUser['role'] == "user"){
                    session()->set([
                        'email' => $dataUser['email'],
                        'nama' => $dataUser['nama'],
                        'role' => $dataUser['role'],
                        'level' => $dataUser['level'],
                        'profile' =>$dataUser['profile']
                    ]);
                    return redirect()->to(base_url('user'));
                }
            }
        }

        session()->setFlashData('errorLogin', 'Email atau Password Salah');
        return redirect()->to(base_url());
    }
    public function logoutUser(){
        session()->destroy();
        return redirect()->to(base_url());
    }

    public function processAdmin(){
        $userModel = new UserModel();
        $modulModel = new ModulModel();

    
        $data['jumlahUser'] = $userModel->where('role!=', 'admin')->countAllResults();
        $data['jumlahModul'] = $modulModel->countAllResults();

        // Cek Langganan
        $userModel->where('expired_date <', date('Y-m-d'))->set(['level'=> 1,'expired_date' => null])->update();
        
        $email = $this->request->getPost('email');
        $dataUser = $userModel->find($email);

        if($dataUser){
            $password = $this->request->getPost('password');
            if(password_verify($password, $dataUser['password'])){
                

                if($dataUser['role'] == "admin"){
                    session()->set([
                        'email' => $dataUser['email'],
                        'nama' => $dataUser['nama'],
                        'role' => $dataUser['role']
                    ]);
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

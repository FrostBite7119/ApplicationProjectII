<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function process(){
        $userModel = new UserModel();

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Harus diisi'
                ]
            ],
            'nomor-telepon' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor telepon Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email Harus diisi',
                    'valid_email' => 'Gunakan email yang valid',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat telepon Harus diisi'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 4 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to(base_url())->withInput();
        }

        $userModel->insert([
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'no_telepon' => $this->request->getPost('nomor-telepon'),
            'alamat' => $this->request->getPost('alamat'),
            'level' => 0
        ]);

        session()->setFlashdata('info', 'Berhasil register login untuk melanjutkan');
        return redirect()->to(base_url());
    }
}

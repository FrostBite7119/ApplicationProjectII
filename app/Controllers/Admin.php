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

class Admin extends BaseController
{
    public function index(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        return view('admin/home');
    }

    public function modul(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $modulModel = new ModulModel();
        $editorModel = new EditorModel();

        $data['title'] = "Modul";
        $data['modul'] = $modulModel->find();
        $data['status'] = $editorModel->where([
            'email' => session()->get('email'),
        ])->findAll();

        return view('admin/list_modul.php', $data);
    }

    public function addmodul(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $userModel = new UserModel();

        $data['title'] = "Tambah Modul";
        $data['admin'] = $userModel->where(['email !=' => session()->get('email'),'role' => 'admin'])->findAll();

        return view('admin/add_modul', $data);
    }

    public function insertModul(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $dataError = [];
        // Cek Input Judul
        if(empty($this->request->getPost('judul'))){
            $dataError[] = "Kolom judul tidak boleh kosong";
        }

        // Cek Input Target
        if($this->request->getPost('target[]')){
            foreach($this->request->getPost('target[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input target tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada target pembelajaran";
        }

        // Cek Input Syarat
        if($this->request->getPost('syarat[]')){
            foreach($this->request->getPost('syarat[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input syarat tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada syarat pembelajaran";
        }

        // Cek Input Saran
        if($this->request->getPost('saran[]')){
            foreach($this->request->getPost('saran[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input saran tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada saran pembelajaran";
        }

        //Cek Input Sub Modul
        if($this->request->getPost('subModul[]')){
            $i = 0;
            $m = 0;
            foreach($this->request->getPost('subModul[]') as $target){
                if(empty($target['subModul'])){
                    if($i == 0){
                        $dataError[] = "Input sub modul tidak boleh kosong";
                        $i++;
                    }
                }

                if(isset($target['materi'])){
                    $j = 0;
                    $k = 0;
                    foreach($target['materi'] as $data){
                        if(empty($data['judulMateri'])){
                            if($j == 0){
                                $dataError[] = "Input judul materi tidak boleh kosong";
                                $j++;
                            }
                        }
        
                        if(empty($data['isiMateri'])){
                            if($k == 0){
                                $dataError[] = "Input isi materi tidak boleh kosong";
                                $k++;
                            }
                        }   
                    }
                }else{
                    if($m == 0){
                        $dataError[] = "Harus ada materi";
                        $m++;
                    }
                }
            }
        }else{
            $dataError[] = "Harus ada modul";
        }
        

        // Cek Input Deskripsi
        if(empty($this->request->getPost('deskripsi'))){
            $dataError[] = "Kolom deskripsi tidak boleh kosong";
        }

        // Cek Gambar
        $cover = $this->request->getFile('fileCover');
        if($cover->getError() == 4){
            $dataError[] = "Gambar harus diisi terlebih dahulu";
        }else{
            if($cover->getMimeType() != 'image/jpg' && $cover->getMimeType() != 'image/png' && $cover->getMimeType() != 'image/jpeg'){
                $dataError[] = "File bukan merupakan gambar";
            }else{
                if($cover->getExtension() != 'jpg' && $cover->getExtension() != 'png' && $cover->getExtension() != 'jpeg'){
                    $dataError[] = "Ekstensi gambar jpg/png/jpeg";
                }
            }
        }

        if(count($dataError) == 0){
            // Input Modul
            $modulModel = new ModulModel();
            $newCoverName = $cover->getRandomName();
            $modulModel->insert([
                'judul_modul' => $this->request->getPost('judul'),
                'level' => $this->request->getPost('level'),
                'kategori' => $this->request->getPost('kategori'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'email' => session()->get('email'),
                'cover' => $newCoverName
            ]);

            $cover->move('cover', $newCoverName);

            $idModul = $modulModel->insertID();

            //Input Target
            $targetModel = new TargetModel();
            $dataTarget = [];
            foreach($this->request->getPost('target[]') as $target){
                $dataTarget[] = [
                    'target' => $target,
                    'id_modul' => $idModul
                ];
            }

            $targetModel->builder()->insertBatch($dataTarget);

            //Input Syarat
            $syaratModel = new SyaratModel();
            $dataSyarat = [];
            foreach($this->request->getPost('syarat[]') as $target){
                $dataSyarat[] = [
                    'persyaratan' => $target,
                    'id_modul' => $idModul
                ];
            }

            $syaratModel->builder()->insertBatch($dataSyarat);

            //Input Saran
            $saranModel = new DisarankanModel();
            $dataSaran = [];
            foreach($this->request->getPost('saran[]') as $target){
                $dataSaran[] = [
                    'disarankan' => $target,
                    'id_modul' => $idModul
                ];
            }

            $saranModel->builder()->insertBatch($dataSaran);

            //Input Sub Modul dan Materi
            $subModulModel = new SubModulModel();
            $materiModel = new MateriModel();
            foreach($this->request->getPost('subModul[]') as $target){
                $subModulModel->insert([
                    'sub_modul' => $target['subModul'],
                    'id_modul' => $idModul
                ]);

                $idSubModul = $subModulModel->insertID();

                foreach($target['materi'] as $targetMateri){
                    $materiModel->insert([
                        'judul_materi' => $targetMateri['judulMateri'],
                        'isi_materi' => $targetMateri['isiMateri'],
                        'level' => $targetMateri['visibilitas'],
                        'id_sub_modul' => $idSubModul
                    ]);
                }
            }

            // Input Editor
            $editorModel = new EditorModel();
            $dataEditor = [];
            $dataEditor[] = [
                'email' => session()->get('email'),
                'status' => 'pembuat',
                'id_modul' => $idModul
            ];

            
            if($this->request->getPost('editor[]')){
                
                foreach($this->request->getPost('editor[]') as $target){
                    $dataEditor[] = [
                        'email' => $target,
                        'status' => 'editor',
                        'id_modul' => $idModul
                    ];
                }
            }

            $editorModel->builder()->insertBatch($dataEditor);

            return redirect()->to('admin/modul')->with('info', 'Berhasil menambahkan modul');
        }else{
            return redirect()->back()->withInput()->with('errors', $dataError);
        }
    }

    public function deleteModul($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        $modulModel = new ModulModel();
        $modulModel->delete($id);
        return redirect()->route('admin/modul')->with('info', 'Berhasil menghapus data');
    }

    public function editdata($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $userModel = new UserModel();
        $modulModel = new ModulModel();
        $targetModel = new TargetModel();
        $syaratModel = new SyaratModel();
        $saranModel = new DisarankanModel();
        $subModulModel = new subModulModel();
        $materiModel = new MateriModel();
        $editorModel = new EditorModel();

        $data['id'] = $id;
        $data['title'] = "Edit Data";
        $data['admin'] = $userModel->where(['email !=' => session()->get('email'),'role' => 'admin'])->findAll();
        $data['modul'] = $modulModel->find($id);
        $data['target'] = $targetModel->where(['id_modul' => $id])->findAll();
        $data['syarat'] = $syaratModel->where(['id_modul' => $id])->findAll();
        $data['saran'] = $saranModel->where(['id_modul' => $id])->findAll();
        $data['subModul'] = $subModulModel->where(['id_modul' => $id])->findAll();
        $data['materi'] = $materiModel->join('sub_modul', 'sub_modul.id_sub_modul = materi.id_sub_modul')->where(['id_modul' => $id])->findAll();
        $data['editor'] = $editorModel->where(['id_modul' => $id])->findAll();

        return view('admin/edit_modul', $data);
    }

    public function updateModul($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $dataError = [];
        // Cek Input Judul
        if(empty($this->request->getPost('judul'))){
            $dataError[] = "Kolom judul tidak boleh kosong";
        }

        // Cek Input Target
        if($this->request->getPost('target[]')){
            foreach($this->request->getPost('target[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input target tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada target pembelajaran";
        }

        // Cek Input Syarat
        if($this->request->getPost('syarat[]')){
            foreach($this->request->getPost('syarat[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input syarat tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada syarat pembelajaran";
        }

        // Cek Input Saran
        if($this->request->getPost('saran[]')){
            foreach($this->request->getPost('saran[]') as $target){
                if(empty($target)){
                    $dataError[] = "Input saran tidak boleh kosong";
                    break;
                }
            }
        }else{
            $dataError[] = "Harus ada saran pembelajaran";
        }

        //Cek Input Sub Modul
        if($this->request->getPost('subModul[]')){
            $i = 0;
            $m = 0;
            foreach($this->request->getPost('subModul[]') as $target){
                if(empty($target['subModul'])){
                    if($i == 0){
                        $dataError[] = "Input sub modul tidak boleh kosong";
                        $i++;
                    }
                }

                if(isset($target['materi'])){
                    $j = 0;
                    $k = 0;
                    foreach($target['materi'] as $data){
                        if(empty($data['judulMateri'])){
                            if($j == 0){
                                $dataError[] = "Input judul materi tidak boleh kosong";
                                $j++;
                            }
                        }
        
                        if(empty($data['isiMateri'])){
                            if($k == 0){
                                $dataError[] = "Input isi materi tidak boleh kosong";
                                $k++;
                            }
                        }   
                    }
                }else{
                    if($m == 0){
                        $dataError[] = "Harus ada materi";
                        $m++;
                    }
                }
            }
        }else{
            $dataError[] = "Harus ada modul";
        }
        

        // Cek Input Deskripsi
        if(empty($this->request->getPost('deskripsi'))){
            $dataError[] = "Kolom deskripsi tidak boleh kosong";
        }

        // Cek Gambar
        $cover = $this->request->getFile('fileCover');
        if($cover->getError() == 4){
            $namaSampul = $this->request->getPost("sampulLama");
        }else{
            $namaSampul = $cover->getRandomName();
            unlink('cover/' . $this->request->getPost("sampulLama"));
            $cover->move('cover', $namaSampul);
        }

        if(count($dataError) == 0){
            // Update Modul
            $modulModel = new ModulModel();
            $modulModel->update($id, [
                'judul_modul' => $this->request->getPost('judul'),
                'level' => $this->request->getPost('level'),
                'kategori' => $this->request->getPost('kategori'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'email' => session()->get('email'),
                'cover' => $namaSampul
            ]);

            //Update Target
            $targetModel = new TargetModel();
            $targetModel->where('id_modul', $id)->delete();
            $dataTarget = [];
            foreach($this->request->getPost('target[]') as $target){
                $dataTarget[] = [
                    'target' => $target,
                    'id_modul' => $id
                ];
            }

            $targetModel->builder()->insertBatch($dataTarget);

            //Update Syarat
            $syaratModel = new SyaratModel();
            $syaratModel->where('id_modul', $id)->delete();
            $dataSyarat = [];
            foreach($this->request->getPost('syarat[]') as $target){
                $dataSyarat[] = [
                    'persyaratan' => $target,
                    'id_modul' => $id
                ];
            }

            $syaratModel->builder()->insertBatch($dataSyarat);

            //Update Saran
            $saranModel = new DisarankanModel();
            $saranModel->where('id_modul', $id)->delete();
            $dataSaran = [];
            foreach($this->request->getPost('saran[]') as $target){
                $dataSaran[] = [
                    'disarankan' => $target,
                    'id_modul' => $id
                ];
            }

            $saranModel->builder()->insertBatch($dataSaran);

            // Input Sub Modul dan Materi
            $subModulModel = new SubModulModel();
            $materiModel = new MateriModel();
            
            $key = $materiModel->join('sub_modul', 'sub_modul.id_sub_modul = materi.id_sub_modul')->where('id_modul', $id)->first();
            $materiModel->where('id_sub_modul', $key['id_modul'])->delete();
            $subModulModel->where('id_modul', $id)->delete();

            foreach($this->request->getPost('subModul[]') as $target){
                $subModulModel->insert([
                    'sub_modul' => $target['subModul'],
                    'id_modul' => $id
                ]);

                $idSubModul = $subModulModel->insertID();

                foreach($target['materi'] as $targetMateri){
                    $materiModel->insert([
                        'judul_materi' => $targetMateri['judulMateri'],
                        'isi_materi' => $targetMateri['isiMateri'],
                        'level' => $targetMateri['visibilitas'],
                        'id_sub_modul' => $idSubModul
                    ]);
                }
            }

            // Input Editor
            $editorModel = new EditorModel();
            $editorModel->where('id_modul', $id)->delete();
            $dataEditor = [];
            $dataEditor[] = [
                'email' => session()->get('email'),
                'status' => 'pembuat',
                'id_modul' => $id
            ];

            
            if($this->request->getPost('editor[]')){
                
                foreach($this->request->getPost('editor[]') as $target){
                    $dataEditor[] = [
                        'email' => $target,
                        'status' => 'editor',
                        'id_modul' => $id
                    ];
                }
            }

            $editorModel->builder()->insertBatch($dataEditor);

            return redirect()->to('admin/modul')->with('info', 'Berhasil mengedit modul');
        }else{
            return redirect()->back()->withInput()->with('errors', $dataError);
        }
    }
}

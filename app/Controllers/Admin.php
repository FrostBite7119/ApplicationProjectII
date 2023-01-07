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
use App\Models\LanggananModel;
use App\Models\HistoryPembelianModel;
use App\Models\DetailTransaksiModel;
use App\Models\TestimoniModel;
use App\Models\KategoriModel;

class Admin extends BaseController
{
    public function index(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $userModel = new UserModel();
        $modulModel = new ModulModel();

        $data['jumlahUser'] = $userModel->where('role!=', 'admin')->countAllResults();
        $data['jumlahModul'] = $modulModel->countAllResults();

        $historyPembelianModel = new HistoryPembelianModel();
        $data['history'] = $historyPembelianModel->findAll();
        $data['title'] = "Beranda";
        $data['jumlahTransaksiBulan'] = $historyPembelianModel->select('COUNT(*)')->where('MONTH(tanggal_pembelian) = MONTH(CURRENT_DATE)')->countAllResults();
        $data['jumlahPendapatanBulan'] = $historyPembelianModel->select('SUM(detail_transaksi.jumlah_transaksi) AS total')->join('detail_transaksi','history_pembelian.id_history = detail_transaksi.id_history')->where('MONTH(tanggal_pembelian) = MONTH(CURRENT_DATE)')->findAll();
      
        return view('admin/home',$data);
    }

    // Modul Start
    public function modul(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $modulModel = new ModulModel();
        $editorModel = new EditorModel();

        $data['title'] = "Modul";
        $data['modul'] = $modulModel->join('kategori', 'modul.id_kategori = kategori.id_kategori')->find();
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
        $kategoriModel = new KategoriModel();

        $data['title'] = "Tambah Modul";
        $data['admin'] = $userModel->where(['email !=' => session()->get('email'),'role' => 'admin'])->findAll();
        $data['kategori'] = $kategoriModel->findAll();

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
                'id_kategori' => $this->request->getPost('kategori'),
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
        $kategoriModel = new KategoriModel();

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
        $data['kategori'] = $kategoriModel->findAll();

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
                'id_kategori' => $this->request->getPost('kategori'),
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
    // Modul End

    // Testimoni Start
    public function testimoni(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $testimoniModel = new TestimoniModel();

        $data['title'] = "Testimoni";
        $data['testimoni'] = $testimoniModel->findAll();
        return view('admin/list_testimoni', $data);
    }

    public function addtestimoni(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $data['title'] = "Tambah Testimoni";

        return view('admin/add_testimoni', $data);
    }

    public function inserttestimoni(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        
        $testimoniModel = new TestimoniModel();
        $profileTesti = $this->request->getFile('profile');
        $newProfileTesti = $profileTesti->getRandomName();

        // if(!$this->request->getPost('diskon')){
        //     $diskon = null;
        //     $waktuDiskon = null;
        // }else{
        //     $diskon = $this->request->getPost('diskon');
        //     $waktuDiskon = $this->request->getPost('rentangDiskon');
        // }

        $result = $testimoniModel->insert([
            'profile' => $newProfileTesti,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'nama' => $this->request->getPost('nama'),
            'bidang' => $this->request->getPost('bidang'),
        ]);

        if($result !== false){
            $profileTesti->move('profile_testi', $newProfileTesti);
            return redirect()->to('admin/testimoni')->with('info', 'Berhasil menambahkan data');
        }else{
            return redirect()->back()->withInput()->with('errors', $testimoniModel->errors());
        }
    }

    public function deletetestimoni($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        $testimoniModel = new TestimoniModel();
        $testimoniModel->delete($id);
        return redirect()->route('admin/testimoni')->with('info', 'Berhasil menghapus data');
    }

    public function edittestimoni($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $testimoniModel = new TestimoniModel();

        $data['title'] = "Update Testimoni";
        $data['dataTestimoni'] = $testimoniModel->find($id);

        return view('admin/edit_testimoni', $data);
    }

    public function updatetestimoni($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        
        $testimoniModel = new TestimoniModel();
        $profileTesti = $this->request->getFile('profile');
        $newProfileTesti = $profileTesti->getRandomName();

        // if(!$this->request->getPost('diskon')){
        //     $diskon = null;
        //     $waktuDiskon = null;
        // }else{
        //     $diskon = $this->request->getPost('diskon');
        //     $waktuDiskon = $this->request->getPost('rentangDiskon');
        // }

        $result = $testimoniModel->update($id, [
            'profile' => $newProfileTesti,
            'deskripsi' => $this->request->getPost('deskripsi'),
            'nama' => $this->request->getPost('nama'),
            'bidang' => $this->request->getPost('bidang'),
        ]);

        if($result !== false){
            $profileTesti->move('profile_testi', $newProfileTesti);
            return redirect()->to('admin/testimoni')->with('info', 'Berhasil mengupdate data');
        }else{
            return redirect()->back()->withInput()->with('errors', $testimoniModel->errors());
        }
    }

    // Testimoni End

    // Langganan Start
    public function langganan(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $langgananModel = new LanggananModel();

        $data['title'] = "Paket Langganan";
        $data['langganan'] = $langgananModel->findAll();
        return view('admin/list_langganan', $data);
    }

    public function addlangganan(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $data['title'] = "Tambah Langganan";

        return view('admin/add_langganan', $data);
    }

    public function insertlangganan(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        
        $langgananModel = new langgananModel();

        if(!$this->request->getPost('diskon')){
            $diskon = null;
            $waktuDiskon = null;
        }else{
            $diskon = $this->request->getPost('diskon');
            $waktuDiskon = $this->request->getPost('rentangDiskon');
        }

        $result = $langgananModel->insert([
            'lama' => $this->request->getPost('lama'),
            'rentang' => $this->request->getPost('rentang'),
            'biaya_langganan' => $this->request->getPost('biayaLangganan'),
            'diskon' => $diskon,
            'waktu_diskon' => $waktuDiskon
        ]);

        if($result !== false){
            return redirect()->to('admin/langganan')->with('info', 'Berhasil menambahkan data');
        }else{
            return redirect()->back()->withInput()->with('errors', $langgananModel->errors());
        }
    }

    public function deletelangganan($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        $langgananModel = new LanggananModel();
        $langgananModel->delete($id);
        return redirect()->route('admin/langganan')->with('info', 'Berhasil menghapus data');
    }

    public function editlangganan($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $langgananModel = new LanggananModel();

        $data['title'] = "Update Langganan";
        $data['dataLangganan'] = $langgananModel->find($id);

        return view('admin/edit_langganan', $data);
    }

    public function updatelangganan($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }
        
        $langgananModel = new langgananModel();

        if(!$this->request->getPost('diskon')){
            $diskon = null;
            $waktuDiskon = null;
        }else{
            $diskon = $this->request->getPost('diskon');
            $waktuDiskon = $this->request->getPost('rentangDiskon');
        }

        $result = $langgananModel->update($id, [
            'lama' => $this->request->getPost('lama'),
            'rentang' => $this->request->getPost('rentang'),
            'biaya_langganan' => $this->request->getPost('biayaLangganan'),
            'diskon' => $diskon,
            'waktu_diskon' => $waktuDiskon
        ]);

        if($result !== false){
            return redirect()->to('admin/langganan')->with('info', 'Berhasil mengupdate data');
        }else{
            return redirect()->back()->withInput()->with('errors', $langgananModel->errors());
        }
    }

    public function pembayaran(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $historyPembelianModel = new HistoryPembelianModel();

        $data['title'] = "Pembayaran";
        $data['pembayaran'] = $historyPembelianModel->join('user', 'history_pembelian.email = user.email')->join('langganan', 'history_pembelian.id_langganan = langganan.id_langganan')->where('status', 'Ditinjau')->findAll();
        return view('admin/list_pembayaran', $data);
    }

    public function detailpembayaran($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $historyPembelianModel = new HistoryPembelianModel();
        $detailTransaksiModel = new DetailTransaksiModel();

        $data['title'] = "Detail Pembayaran";
        $data['pembayaran'] = $historyPembelianModel->join('user', 'history_pembelian.email = user.email')->join('langganan', 'history_pembelian.id_langganan = langganan.id_langganan')->find($id);
        $data['detail_pembayaran'] = $detailTransaksiModel->where('id_history', $id)->findAll();

        return view('admin/detail_pembayaran', $data);
    }

    public function updatePembayaran($id, $status){
        $historyPembelianModel = new HistoryPembelianModel();

        if($status == 1){
            $userModel = new UserModel();
            $data = $historyPembelianModel->join('user', 'history_pembelian.email = user.email')->join('langganan', 'history_pembelian.id_langganan = langganan.id_langganan')->find($id);

            if($data['rentang'] == "Hari"){
                $pertambahanHari = $data['lama'] * 1;
            }else if($data['rentang'] == "Bulan"){
                $pertambahanHari = $data['lama'] * 30;
            }else if($data['rentang'] == "Tahub"){
                $pertambahanHari = $data['lama'] * 365;
            }

            $result = $userModel->update($data['email'], [
                'level' => 2,
                'expired_date' => date('Y/m/d', strtotime("+$pertambahanHari days"))
            ]);

            $historyPembelianModel->update($id, [
                'status' => 'Berhasil',
                'tanggal_berlaku' => date('Y/m/d')." - ".date('Y/m/d', strtotime("+$pertambahanHari days"))
            ]);

            if($result !== false){
                return redirect()->back()->with('info', 'Berhasil mengupdate status pembayaran');
            }else{
                return redirect()->back()->with('error', 'Gagal mengupdate status pembayaran');
            }

        }else if($status == 0){
            $result = $historyPembelianModel->update($id, [
                'status' => 'Ditolak'
            ]);

            if($result !== false){
                return redirect()->back()->with('info', 'Berhasil mengupdate status pembayaran');
            }else{
                return redirect()->back()->with('error', 'Gagal mengupdate status pembayaran');
            }
        }
    }

    public function user(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $userModel = new UserModel();

        $data['title'] = "User";
        $data['user'] = $userModel->where('role!=', 'admin')->findAll();

        return view('admin/list_user.php', $data);
    }

    public function detailuser($idUser){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $userModel = new UserModel();
        $historyPembelianModel = new HistoryPembelianModel();

        $data['title'] = "Detail User";
        $data['user'] = $userModel->find($idUser);
        $data['pembayaran'] = $historyPembelianModel->join('user', 'history_pembelian.email = user.email')->join('langganan', 'history_pembelian.id_langganan = langganan.id_langganan')->where('history_pembelian.email', $idUser)->findAll();

        return view('admin/detail_user.php', $data);
    }

    public function kategori(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $kategoriModel = new KategoriModel();

        $data['title'] = "Kategori";
        $data['kategori'] = $kategoriModel->where('id_kategori !=', 1)->findAll();
        return view('admin/list_kategori', $data);
    }

    public function addkategori(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $data['title'] = "Tambah Kategori";
        return view('admin/add_kategori', $data);
    }

    public function insertkategori(){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $kategoriModel = new KategoriModel();
        
        $result = $kategoriModel->insert([
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ]);

        if($result !== false){
            return redirect()->route('admin/kategori')->with('info', 'Berhasil ditambahkan');
        }else{
            return redirect()->back()->with('errors', $kategoriModel->errors());
        }

        return view('admin/add_kategori');
    }

    public function deletekategori($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $modulModel = new ModulModel();
        $kategoriModel = new KategoriModel();

        $modulModel->where('kategori', $id)->set(['kategori'=> 1])->update();
        $result = $kategoriModel->delete($id);

        if($result !== false){
            return redirect()->route('admin/kategori')->with('info', 'Berhasil dihapus');
        }else{
            return redirect()->route('admin/kategori')->with('info', 'Gagal dihapus');
        }
    }

    public function editkategori($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $kategoriModel = new KategoriModel();
        $data['kategori'] = $kategoriModel->find($id);
        $data['title'] = "Update Kategori";

        return view('admin/edit_kategori', $data);
    }

    public function updatekategori($id){
        if (session()->get('role') !== 'admin') { // jika bukan admin
            return redirect()->route('admin/login');
        }

        $kategoriModel = new KategoriModel();

        $result = $kategoriModel->update($id, [
            'nama_kategori' => $this->request->getPost('nama_kategori')
        ]);

        if($result !== false){            
            return redirect()->route('admin/kategori')->with('info', 'Berhasil diupdate');
        }else{
            return redirect()->back()->with('errors', $kategoriModel->errors());
        }
    }
}

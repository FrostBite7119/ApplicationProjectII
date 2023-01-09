<?php

namespace App\Controllers;

use App\Models\ModulModel;
use App\Models\SubModulModel;
use App\Models\TargetModel;
use App\Models\SyaratModel;
use App\Models\DisarankanModel;
use App\Models\LanggananModel;
use App\Models\HistoryPembelianModel;
use App\Models\UserModel;
use App\Models\DetailTransaksiModel;
use App\Models\MateriModel;
use App\Models\RatingModel;
use App\Models\TestimoniModel;
use App\Models\KursusSayaModel;
use App\Models\KategoriModel;

class Home extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $modulModel = new ModulModel();
        $historyPembelianModel = new HistoryPembelianModel();
        // Cek Langganan
        $userModel->where('expired_date <', date('Y-m-d'))->set(['level'=> 1,'expired_date' => null])->update();

        $data['jumlahUser'] = $userModel->where('role!=', 'admin')->countAllResults();
        $data['jumlahModul'] = $modulModel->countAllResults();
        
        return view('user/index', $data);
    }

    public function home(){
        $modulModel = new ModulModel();
        $testimoniModel = new TestimoniModel();

        $builder = $modulModel;

        // $builder->select("m.*, AVG(rating.rating) as rata, COUNT(rating.rating) as total");
        $builder->select("m.*, kategori.nama_kategori, AVG(rating.rating) as rata");
        $builder->from('modul m');
        $builder->join('kategori', 'm.id_kategori = kategori.id_kategori');
        $builder->join('rating', 'm.id_modul = rating.id_modul', 'left');

        $data['modul'] = $builder->where('m.deleted_at IS NULL')->groupBy(['m.id_modul'])->paginate(15, 'modul');
        $data['pager'] = $modulModel->pager;
        $data['testimoni'] = $testimoniModel->findAll();

        return view('user/home', $data);
    }

    public function courseDetail($id){
        $modulModel = new ModulModel();
        $subModel = new SubModulModel();
        $targetModel = new TargetModel();
        $syaratModel = new SyaratModel();
        $saranModel = new DisarankanModel();
        $kursusSayaModel = new KursusSayaModel();

        $data['modul'] = $modulModel->join('kategori', 'modul.id_kategori = kategori.id_kategori')->find($id);
        $data['totalSub'] = $subModel->where(['id_modul' => $id])->countAllResults();
        $data['target'] = $targetModel->where('id_modul', $id)->findAll();
        $data['syarat'] = $syaratModel->where('id_modul', $id)->findAll();
        $data['saran'] = $saranModel->where('id_modul', $id)->findAll();
        $data['subModul']  = $subModel->where('id_modul', $id)->findAll();
        $data['materi'] = $subModel->join('materi', 'sub_modul.id_sub_modul = materi.id_sub_modul')->where('sub_modul.id_modul', $id)->findAll();

        if(session()->get('role') == "user"){
            $cek = $kursusSayaModel->where(['id_modul' => $id, 'email' => session()->get('email')])->findAll();
            if($cek){
                $data['isAdded'] = true;                
            }else{
                $data['isAdded'] = false;
            }
        }else{
            $data['isAdded'] = false;
        }

        $builder = $modulModel->builder();

        // $builder->select("AVG(rating.rating) as rata, COUNT(rating.rating) as total");
        $builder->select("AVG(rating.rating) as rata");
        $builder->from('modul m');
        $builder->join('rating', 'm.id_modul = rating.id_modul')->where("rating.id_modul = '".$id."'");
        $data['rating'] = $builder->get()->getResultArray();

        $tes = new RatingModel();
        //rating 5
        $tes->select("COUNT(rating) as total");
        $tes->where("id_modul = '".$id."' AND rating = 5");
        $data['rating5'] = $tes->findAll();

        //rating 4
        $tes->select("COUNT(rating) as total");
        $tes->where("id_modul = '".$id."' AND rating = 4");
        $data['rating4'] = $tes->findAll();


        //rating 3
        $tes->select("COUNT(rating) as total");
        $tes->where("id_modul = '".$id."' AND rating = 3");
        $data['rating3'] = $tes->findAll();

        //rating 2
        $tes->select("COUNT(rating) as total");
        $tes->where("id_modul = '".$id."' AND rating = 2");
        $data['rating2'] = $tes->findAll();

        //rating 1
        $tes->select("COUNT(rating) as total");
        $tes->where("id_modul = '".$id."' AND rating = 1");
        $data['rating1'] = $tes->findAll();

        return view('user/course_detail', $data);
    }

    public function search(){
        $modulModel = new ModulModel();
        $kategoriModel = new KategoriModel();

        $data['kategori'] = $kategoriModel->findAll();

        if($this->request->getGet('kategori') != null || $this->request->getGet('sort-by') || $this->request->getGet('level') != null){
            $builder = $modulModel;
                    
            // $builder->select("m.*, AVG(rating.rating) as rata, COUNT(rating.rating) as total")->from('modul m')->join('rating', 'm.id_modul = rating.id_modul', 'left')->like('m.judul_modul', $this->request->getGet('cari'), 'both');
            $builder->select("m.*, AVG(rating.rating) as rata, kategori.nama_kategori")->from('modul m')->join('kategori', 'm.id_kategori = kategori.id_kategori')->join('rating', 'm.id_modul = rating.id_modul', 'left')->like('m.judul_modul', $this->request->getGet('cari'), 'both');

            if($this->request->getGet('kategori') !== ""){
                $where = "kategori.id_kategori='".$this->request->getGet('kategori')."'";
                $builder->where($where);
            }

            if($this->request->getGet('level') !== ""){
                $where = "m.level='".$this->request->getGet('level')."'";
                $builder->where($where);
            }

            if($this->request->getGet('sort-by') !== null){
                if($this->request->getGet('sort-by') == 5){                
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = m.id_modul) = 5');
                }else if($this->request->getGet('sort-by') == 4){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = m.id_modul) BETWEEN 4 AND 4.99');
                }else if($this->request->getGet('sort-by') == 3){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = m.id_modul) BETWEEN 3 AND 3.99');
                }else if($this->request->getGet('sort-by') == 2){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = m.id_modul) BETWEEN 2 AND 2.99');
                }else if($this->request->getGet('sort-by') == 1){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = m.id_modul) BETWEEN 1 AND 1.99');
                }

                // SELECT * FROM modul WHERE judul_modul LIKE '%android%' AND kategori = 'Android' AND level = 'mudah' AND (SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 3 AND 3.99;
            }

            $data['modul'] = $builder->where('m.deleted_at IS NULL')->groupBy(['m.id_modul'])->paginate(12, 'modul');    
        }else{
            $builder = $modulModel;

            // $builder->select("m.*, AVG(rating.rating) as rata, COUNT(rating.rating) as total");
            $builder->select("m.*, AVG(rating.rating) as rata, kategori.nama_kategori");
            $builder->from('modul m');
            $builder->join('kategori', 'm.id_kategori = kategori.id_kategori')->join('rating', 'm.id_modul = rating.id_modul', 'left')->like('m.judul_modul', $this->request->getGet('cari'), 'both');

            $data['modul'] = $builder->where('m.deleted_at IS NULL')->groupBy('m.id_modul')->paginate(12, 'modul');
        }

        $data['pager'] = $modulModel->pager;

        return view('user/search', $data);
    }

    public function membership(){
        // if (session()->get('role') !== 'user') { // jika bukan admin
        //     return redirect()->to(base_url());
        // }
        $langgananModel = new LanggananModel();

        $data['langganan'] = $langgananModel->orderBy("CASE rentang WHEN 'Hari' THEN 1 ELSE 2 END")->orderBy('rentang', 'asc')->orderBy('lama', 'asc')->findAll();
        

        return view('user/membership', $data);
    }

    // public function testimoniHome(){
    //     // if (session()->get('role') !== 'user') { // jika bukan admin
    //     //     return redirect()->to(base_url());
    //     // }

    //     $data['testimoni'] = $testimoniModel->findAll();
    //     return view('admin/list_testimoni', $data);
        
    // }
    

    public function pembayaranlangganan($id){
        $langgananModel = new LanggananModel();
        $historyPembelianModel = new HistoryPembelianModel();
        $userModel = new UserModel();

        $data['langganan'] = $langgananModel->find($id);

        if(session()->get('email') != null && session()->get('role') == "user"){
            $data['isFirstTime'] = !$historyPembelianModel->where(['email' => session()->get('email'), 'status' => 'Berhasil'])->findAll();
            $data['isPending'] = $historyPembelianModel->where(['email'=> session()->get('email'), 'status' => "Ditinjau"])->findAll();
            $data['user'] = $userModel->find(session()->get('email'));
        }else{
            $data['isFirstTime'] = false;
        }

        return view('user/langganan_pembayaran', $data);
    }

    public function bayar($email, $id_langganan){
        $userModel = new UserModel();
        $dataUser = $userModel->find($email);

        if($dataUser['expired_date'] == null){
            $historyPembelianModel = new HistoryPembelianModel();

            $buktiPembayaran = $this->request->getFile("bukti_pembayaran");
            $newBuktiPembayaran = $buktiPembayaran->getRandomName();            

            $result = $historyPembelianModel->insert([
                'tanggal_pembelian' => date('Y-m-d'),
                'bukti_pembayaran' => $newBuktiPembayaran,
                'email' => $email,
                'id_langganan' => $id_langganan
            ]);

            if($result !== false){
                $buktiPembayaran->move('bukti_pembayaran', $newBuktiPembayaran);
                $this->detailtransaksi($historyPembelianModel->insertID(), $this->request->getPost('potongan'), $this->request->getPost('biayaLangganan'));
                return redirect()->to('/main')->with('informasi', 'Pembayaran Ditinjau');
            }else{
                return redirect()->back()->with('errors', $historyPembelianModel->errors());
            }
        }
    }

    public function detailtransaksi($idTransaksi, $potongan, $biayaLangganan){
        $detailTransaksiModel = new DetailTransaksiModel();

        $detailTransaksiModel->insert([
            'nama_transaksi' => 'Biaya Langganan',
            'jumlah_transaksi' => $biayaLangganan,
            'id_history' => $idTransaksi
        ]);


        if($potongan != null){
            foreach($potongan as $data){
                $detailTransaksiModel->insert([
                    'nama_transaksi' => $data['namaPotongan'],
                    'jumlah_transaksi' => $data['jumlah'],
                    'id_history' => $idTransaksi
                ]);
            }
        }
    }

    public function detailMateri($id){
        $materiModel = new MateriModel();
        $subModel = new SubModulModel();
        $ratingModel = new RatingModel();

        $data['materi'] = $materiModel->find($id);
        $ambilId = $materiModel->join('sub_modul', 'materi.id_sub_modul = sub_modul.id_sub_modul')->join('modul', 'sub_modul.id_modul = modul.id_modul')->find($id);
        $idModul = $ambilId['id_modul'];
        $data['subModul']  = $subModel->where('id_modul', $idModul)->findAll();
        $data['materiLain'] = $subModel->join('materi', 'sub_modul.id_sub_modul = materi.id_sub_modul')->where('sub_modul.id_modul', $idModul)->findAll();
        $data['id_modul'] = $idModul;
        $data['rating'] = $ratingModel->where(['id_modul' => $idModul, 'email'=> session()->get('email')])->find();

        if($data['materi']['level'] == 0){
            return view('user/course_materi_detail', $data);
        }else if($data['materi']['level'] == 1){
            if(session()->get('role') == "user"){
                return view('user/course_materi_detail', $data);
            }else{
                return redirect()->back()->with('informasi', 'Hanya tersedia untuk pengguna yang sudah mendaftar');
            }
        }else if($data['materi']['level'] == 2){
            if(session()->get('level') == 2){
                return view('user/course_materi_detail', $data);
            }else{
                return redirect()->back()->with('informasi', 'Hanya tersedia untuk pengguna yang sudah berlangganan');
            }
        }
    }

    public function rating($rating, $idModul){
        if(session()->get('role') == "user"){
            $ratingModel = new RatingModel();
            $data = $ratingModel->where(['id_modul' => $idModul, 'email'=> session()->get('email')])->find();
            if(!$data){
                $ratingModel->insert([
                    'rating' => $rating,
                    'id_modul' => $idModul,
                    'email' => session()->get('email')
                ]);
            }else{
                $ratingModel->where(['id_modul' => $idModul, 'email'=> session()->get('email')])->set(['rating'=> $rating])->update();
            }
            return redirect()->back();
        }else{
            return redirect()->back()->with('informasi', 'Login untuk memberikkan rating');
        }
    }

    public function profile(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();

        $data['user'] = $userModel->find(session()->get('email'));
        return view('user/profile', $data);
    }

    public function riwayatlangganan(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();
        $historyPembelianModel = new HistoryPembelianModel();

        $data['user'] = $userModel->find(session()->get('email'));
        // $data['pembelian'] = $historyPembelianModel->select("h.*, langganan.*, SUM(detail_transaksi.jumlah_transaksi) as total")->from("history_pembelian h")->join('langganan', 'h.id_langganan = langganan.id_langganan')->join('detail_transaksi', 'h.id_history = detail_transaksi.id_history', 'left')->where("h.email = '".session()->get('email')."'")->groupBy(['detail_transaksi.id_history'])->find();
        $db = db_connect();
        $data['pembelian'] = $db->query("SELECT h.*, langganan.*, SUM(detail_transaksi.jumlah_transaksi) as total FROM history_pembelian h LEFT JOIN langganan ON h.id_langganan = langganan.id_langganan LEFT JOIN detail_transaksi ON h.id_history = detail_transaksi.id_history WHERE h.email = 'handy2407@gmail.com' GROUP BY detail_transaksi.id_history")->getResultArray();

        return view('user/riwayat_langganan', $data);
    }

    public function settings_profile(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();

        $data['user'] = $userModel->find(session()->get('email'));

        return view('user/settings_profile', $data);
    }

    public function settings_reset_pass(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();

        $data['user'] = $userModel->find(session()->get('email'));

        return view('user/settings_reset_pass', $data);
    }

    public function change_pass(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();
        $email = session()->get('email');
        $dataUser = $userModel->find($email);
        if (!$this->validate([
            'opwd' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password lama harus diisi',
                ]
            ],

            'npwd' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 4 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'cnpwd' => [
                'rules' => 'matches[npwd]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput()->with('errors', $userModel->errors());
        }
        
        if($dataUser){
            $password = $this->request->getPost('opwd');
            if(password_verify($password, $dataUser['password'])){
                $result = $userModel->update(session()->get('email'), [
                    'password' => password_hash($this->request->getPost('npwd'), PASSWORD_BCRYPT),

                ]);

                if($result !== false){            

                    return redirect()->back()->with('info', 'Berhasil mengupdate data');
                }else{
                    return redirect()->back()->with('info', 'Gagal mengupdate data');
                }
                
            }
        }
    }

    public function kursus_saya(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $kursusSayaModel = new KursusSayaModel();

        $data['kursus'] = $kursusSayaModel->join('modul', 'kursus_saya.id_modul = modul.id_modul')->join('kategori', 'modul.id_kategori = kategori.id_kategori')->where('kursus_saya.email', session()->get('email'))->paginate(9, 'modul');
        $data['pager'] = $kursusSayaModel->pager;

        return view('user/kursus_saya', $data);
    }

    public function updateprofile(){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $userModel = new UserModel();
        $historyPembelianModel = new HistoryPembelianModel();
        $ratingModel = new RatingModel();
        $kursusSayaModel = new KursusSayaModel();

        $nama = $this->request->getPost('nama');
        $email = $this->request->getPost('email');
        $emailLama = $this->request->getPost('emailLama');
        $alamat = $this->request->getPost('alamat');
        $no_telepon = $this->request->getPost('no_telepon');
        $fotoProfil = $this->request->getFile('fotoProfil');

        $dataUser = $userModel->find($email);

        if($dataUser){
            if($email != $emailLama){
                return redirect()->back()->with('informasi', 'Email sudah digunakan');
            }
        }

        if($fotoProfil->getError() == 4){
            $namaFotoProfil = $this->request->getPost('sampulLama');
        }else{
            $namaFotoProfil = $fotoProfil->getRandomName();
            if($this->request->getPost('sampulLama') != "default.jpg"){
                unlink('user_profile/'.$this->request->getPost('sampulLama'));
                $fotoProfil->move('user_profile', $namaFotoProfil);
            }else{
                $fotoProfil->move('user_profile', $namaFotoProfil);
            }
        }

        $historyPembelianModel->where('email', session()->get('email'))->set(['email'=> $email])->update();
        $ratingModel->where('email', session()->get('email'))->set(['email'=> $email])->update();
        $kursusSayaModel->where('email', session()->get('email'))->set(['email'=> $email])->update();

        $result = $userModel->update(session()->get('email'), [
            'nama' => $nama,
            'email' => $email,
            'alamat' => $alamat,
            'no_telepon' => $no_telepon,
            'profile' => $namaFotoProfil
        ]);

        if($result !== false){            
            session()->set([
                'email' => $email,
                'nama' => $nama,
                'profile' => $namaFotoProfil
            ]);
            return redirect()->back()->with('informasi', "Berhasil di-update");
        }else{
            return redirect()->back()->with('errors', $userModel->errors());
        }
    }

    public function tambahkursussaya($idModul){
        if(session()->get('role') == "user"){
            $kursusSayaModel = new KursusSayaModel();

            // $cek = $kursusSayaModel->where(['id_modul' => $idModul, 'email' => session()->get('email')]);
            // if($cek){

            // }

            $result = $kursusSayaModel->insert([
                'id_modul' => $idModul,
                'email' => session()->get('email')
            ]);

            if($result !== false){
                return redirect()->to('course_detail/'.$idModul)->with('informasi', 'Berhasil ditambahkan');
            }else{
                return redirect()->to('course_detail/'.$idModul)->with('informasi', 'Gagal ditambahkan');
            }
        }else{
            return redirect()->to('course_detail/'.$idModul)->with('informasi', 'Login terlebih dahulu untuk menambahkan!');
        }
    }

    public function hapuskursussaya($id){
        if (session()->get('role') !== 'user') { // jika bukan admin
            return redirect()->route('/');
        }

        $kursusSayaModel = new KursusSayaModel();
        $result = $kursusSayaModel->delete($id);

        if($result !== false){
            return redirect()->back()->with('informasi', 'Berhasil dihapus');
        }else{
            return redirect()->back()->with('informasi', 'Gagal dihapus');
        }
    }
}

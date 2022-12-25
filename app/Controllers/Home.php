<?php

namespace App\Controllers;

use App\Models\ModulModel;
use App\Models\SubModulModel;
use App\Models\TargetModel;
use App\Models\SyaratModel;
use App\Models\DisarankanModel;
use App\Models\LanggananModel;

class Home extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    public function home(){

        $modulModel = new ModulModel();

        $data['modul'] = $modulModel->findAll();

        return view('user/home', $data);
    }

    public function courseDetail($id){

        $modulModel = new ModulModel();
        $subModel = new SubModulModel();
        $targetModel = new TargetModel();
        $syaratModel = new SyaratModel();
        $saranModel = new DisarankanModel();

        $data['modul'] = $modulModel->find($id);
        $data['totalSub'] = $subModel->where(['id_modul' => $id])->countAllResults();
        $data['target'] = $targetModel->where('id_modul', $id)->findAll();
        $data['syarat'] = $syaratModel->where('id_modul', $id)->findAll();
        $data['saran'] = $saranModel->where('id_modul', $id)->findAll();
        $data['subModul']  = $subModel->where('id_modul', $id)->findAll();
        $data['materi'] = $subModel->join('materi', 'sub_modul.id_sub_modul = materi.id_sub_modul')->where('sub_modul.id_modul', $id)->findAll();

        return view('user/course_detail', $data);
    }

    public function search(){
        $modulModel = new ModulModel();

        if($this->request->getGet('kategori') != null || $this->request->getGet('sort-by') || $this->request->getGet('level') != null){
            $builder = $modulModel->builder();
                    
            // $where = "kategori='".$this->request->getGet('kategori')."' AND level='".$this->request->getGet('level')."'";
            // $data['modul'] = $builder->select('*')->where($where)->get()->getResultArray();
            $builder->select('*')->like('judul_modul', $this->request->getGet('cari'), 'both');

            if($this->request->getGet('kategori') !== ""){
                $where = "kategori='".$this->request->getGet('kategori')."'";
                $builder->where($where);
            }

            if($this->request->getGet('level') !== ""){
                $where = "level='".$this->request->getGet('level')."'";
                $builder->where($where);
            }

            if($this->request->getGet('sort-by') !== null){
                if($this->request->getGet('sort-by') == 5){                
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) = 5');
                }else if($this->request->getGet('sort-by') == 4){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 4 AND 4.99');
                }else if($this->request->getGet('sort-by') == 3){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 3 AND 3.99');
                }else if($this->request->getGet('sort-by') == 2){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 2 AND 2.99');
                }else if($this->request->getGet('sort-by') == 1){
                    $builder->where('(SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 1 AND 1.99');
                }

                // SELECT * FROM modul WHERE judul_modul LIKE '%android%' AND kategori = 'Android' AND level = 'mudah' AND (SELECT AVG(RATING) FROM rating WHERE id_modul = modul.id_modul) BETWEEN 3 AND 3.99;
            }

            $data['modul'] = $builder->get()->getResultArray();
            
        }else{
            $data['modul'] = $modulModel->like('judul_modul', $this->request->getGet('cari'), 'both')->findAll();
        }


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
}

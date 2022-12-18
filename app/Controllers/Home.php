<?php

namespace App\Controllers;

use App\Models\ModulModel;
use App\Models\SubModulModel;
use App\Models\TargetModel;
use App\Models\SyaratModel;
use App\Models\DisarankanModel;

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
        return view('user/search');
    }
}

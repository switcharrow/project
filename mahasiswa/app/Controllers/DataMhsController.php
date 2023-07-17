<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataMhsModel;
use App\Models\ProdiModel;
use App\Models\TypeMhsModel;

class DataMhsController extends BaseController
{
    public function index()
    {
        $model = new DataMhsModel();
        $data['datamhs'] = $model->allData();

        // return json_encode(array(
        //     "data" => $data['datamhs']
        // ));
        return view('mahasiswa/index' ,$data);

    }

    public function tambah()  {
        $pmodel = new ProdiModel();
        $data['prodi'] = $pmodel->findAll();

        $tmodel = new TypeMhsModel(); 
        $data['typemhs'] = $tmodel->findAll();
        return view('mahasiswa/tambah_data',$data);
    }
    public function addData() {
        $data = [
            'nim' => $this->request->getPost('nim'), 
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'prodi_id' => $this->request->getPost('prodi_id'),
            'type_id' => $this->request->getPost('type_id'),
        ];
        $model = new DataMhsModel();
        $model->insert($data);
        return redirect()->to('/datamhs');
    }
}

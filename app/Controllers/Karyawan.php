<?php

namespace App\Controllers;
use App\Models\KaryawanModel;

class Karyawan extends BaseController
{
    public function index()
    {
         $karyawan = new KaryawanModel;
         $data['karyawan'] = $karyawan->orderBy('nama', 'asc')->paginate(10);
         $data['pager'] = $karyawan->pager;
         echo view('karyawan', $data);
    }

    public function add()
    {
        return view('add');
    }
    public function create() {
        $karyawan = new KaryawanModel();
  
        $result = $karyawan->insert([
           'nama'=>$this->request->getPost("nama"),
           'jenis_kelamin'=>$this->request->getPost("jenis_kelamin"),
           'alamat'=>$this->request->getPost("alamat")
        ]);
        if($result==true) {
            return redirect()->to("/tampil");
        }
  
     }
}
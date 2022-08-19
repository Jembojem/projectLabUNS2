<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Laboratorium;
use \Hermawan\DataTables\DataTable;

class LabManagement extends BaseController
{
    public function index()
    {
        $data =
        [
            "title" => "LabList",
            "page" => "Lab list",
        ];

        return view('panel/lab_management', $data, $data);
    }

    public function getLab()
    {

        $db = db_connect();
        $builder = $db->table('daftar_lab')->select('id, lab_slug, nama_lab, price_per_hour');
          
        return DataTable::of($builder)
               ->addNumbering()
               ->add('Edit', function($row){
                return "<button type='button' class='btn btn-danger btn-sm' onclick='edit(".$row->id.")' >Edit</button>";             
               })
                //it will return data output with numbering on first column
               ->toJson();
    }


    public function edit($id)
    {
        $model = new Laboratorium();
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $result = $model->edit($id);
            if ($result) {
                $this->output['sukses'] = true;
                $this->output['pesan']  = 'Data ditemukan';
                $this->output['data']   = $result;
            }

            echo json_encode($this->output);
        }
    }

    public function update($id)
    {
        $model = new Laboratorium();
        if ($this->request->isAJAX()) {
                $data = [
                    'price_per_hour' => $this->request->getVar('price_per_hour'),
                ];
            $id = $this->request->getVar('id');
            $simpan = $model->ubah($data, $id);
            if ($simpan) {
                $this->output['sukses'] = true;
                $this->output['pesan']  = 'Data diupdate';
            }

            echo json_encode($this->output);
        }
    }

}

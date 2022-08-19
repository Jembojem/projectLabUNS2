<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\ViewFasilitasModel;
use App\Models\FasilitasModel;

class Fasilitas extends BaseController
{
    protected $fasilitas;
    protected $viewFasilitas;
    protected $db;
    public function __construct()
    {
        $this->viewFasilitas = new ViewFasilitasModel();
        $this->fasilitas = new FasilitasModel();
        $this->db = db_connect();
    }
    public function index()
    {
        $data = [
            "title" => "Management Fasilitas",
            "page" => "fasiltias",
            'listlab' => $this->db->table('daftar_lab')->get()->getResultArray()
        ];

        return view("/panel/fasilitas", $data);
    }


    public function getData($table = false, $ids = false)
    {
        if ($this->request->isAjax()) {
            $table = $this->request->getVar('table');
            if ($ids) {
                $data['fasilitas'] = $this->viewFasilitas->find($ids);
            } else {
                $data['fasilitas'] = $this->viewFasilitas->findAll();
            }
            $res = ['data' => $data];
            if ($table) {
                $res['table'] = view('panel/fasilitas-table', $data);
            }
            echo json_encode($res);
        } else {
            exit("<h1>Data Tidak Bisa Diload</h1>");
        }
    }

    public function addData()
    {

        // Validasi
        $validasi = \Config\Services::validation();
        $valid = $this->validate([
            'nama_fasilitas' => [
                'label' => 'Nama Fasilitas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'kode_fasilitas' => [
                'label' => 'Kode Fasilitas',
                'rules' => 'required|is_unique[fasilitas_lab.kode_fasilitas]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'is_unique' => '{field} Sudah Tersedia'
                ]
            ],
            'lab_slug' => [
                'label' => 'Nama Lab',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong'
                ]
            ],
            'good' => [
                'label' => 'Kondisi Baik',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'numeric' => '{field} Hanya Boleh Angka!'
                ]
            ],
            'broken' => [
                'label' => 'Kondisi Rusak',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong',
                    'numeric' => '{field} Hanya Boleh Angka!'
                ]
            ],
            // 'file_image' => [
            //     'label' => 'File Image',
            //     // 'rules' => 'required|is_image[file_image]|mime_in[file_image,image/jpg,image/jpeg,image/png]',
            //     'rules' => 'required',
            //     'errors' => [
            //         'required' => '{field} Tidak Boleh Kosong',
            //         // 'uploaded' => 'Gambar Belum Dipilih',
            //         // 'max_size' => 'Ukuran Gambar Melebihi 5000kb',
            //         // 'is_image' => 'File Yang Anda Pilih Bukan Gambar!',
            //         // 'mime_in' => 'File Yang Anda Pilih Bukan jpg/jpeg/png!'
            //     ]
            // ],
        ]);

        $pesan = [];
        if (!$valid) {
            $pesan = [
                'error' => [
                    'namaFasilitas' => $validasi->getError('nama_fasilitas'),
                    'kodeFasilitas' => $validasi->getError('kode_fasilitas'),
                    'labSlug' => $validasi->getError('lab_slug'),
                    'good' => $validasi->getError('good'),
                    'broken' => $validasi->getError('broken'),
                    // 'fileImg' => $validasi->getError('file_image'),
                ]
            ];
        } else {
            $fileAva = $this->request->getFile('file_image');
            $data = $this->request->getVar();
            if ($fileAva->getFilename() != '') {
                $namaAva = $fileAva->getRandomName();
                $fileAva->move('assets/images/fasilitas', $namaAva);
                $data['file_image'] = $namaAva;
            } else {
                $data['file_image'] = 'default.jpg';
            }

            if ($this->fasilitas->save($data)) {
                $pesan = [
                    'icon' => "success",
                    'title' => "Data Berhasil Ditambahkan",
                    'text' => "Fasilitas Baru Berhasil Diinput"
                ];
            }
            // return redirect()->to('/');
        }
        echo json_encode($pesan);
        // dd($this->request->getVar());
    }

    public function editData()
    {
        if ($this->request->isAJAX()) {
            $fileAva = $this->request->getFile('file_image');
            $data = $this->request->getVar();
            if ($fileAva->getFilename() != '') {
                $namaAva = $fileAva->getRandomName();
                $fileAva->move('assets/images/fasilitas', $namaAva);
                $data['file_image'] = $namaAva;
            } else {
                $data['file_image'] = $data['img_old'];
            }
            unset($data['img_old']);
            if ($this->fasilitas->save($data)) {
                $pesan = [
                    'icon' => "success",
                    'title' => "Data Berhasil Diubah",
                    'text' => "Fasilitas Baru Berhasil Diubah"
                ];
            }
            echo json_encode($pesan);
        } else {
            echo "No Access";
        }
    }

    public function deleteData()
    {
        $id = $this->request->getVar('id');
        // dd($id);
        if ($this->request->isAjax()) {

            $this->fasilitas->delete(['id' => $id]);
            // if () {
            echo json_encode([
                'icon' => "success",
                'title' => "Data Berhasil Diubah",
                'text' => "Fasilitas Baru Berhasil Diubah"
            ]);
            // }
        } else {
            echo json_encode(["error" => "No Access"]);
        }
    }
}

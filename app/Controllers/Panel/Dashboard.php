<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\UserManualModel;

class Dashboard extends BaseController
{

    protected $userManual;
    public function __construct()
    {
        $this->userManual = new UserManualModel();
    }

    public function index()
    {
        $data =
            [
                "title" => "Profile",
                "page" => "Profile",
            ];
        return view('panel/dashboard.php', $data);
    }

    public function editProfile()
    {
        if ($this->request->isAJAX()) {
            $data = $this->request->getVar();
            $validasi = \Config\Services::validation();
            $valid = $this->validate([
                'name' => [
                    'label' => 'Nama Lengkap',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong'
                    ]
                ],
                'telepon' => [
                    'label' => 'Nomor HP',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong'
                        // 'is_unique' => "{field} Sudah Terdaftar"
                    ],
                ],
                // 'avatar' => [
                //     'label' => 'Avatar',
                //     'rules' => 'uploaded[avatar]|max_size[avatar,2048]',
                //     'errors' => [
                //         // 'required' => '{field} Tidak Boleh Kosong',
                //         'uploaded' => 'Gambar Belum Dipilih',
                //         'max_size' => 'Ukuran Gambar Melebihi 2MB',
                //         // 'is_image' => 'File Yang Anda Pilih Bukan Gambar!',
                //         // 'mime_in' => 'File Yang Anda Pilih Bukan jpg/jpeg/png!'
                //     ]
                // ],
            ]);

            $pesan = [];
            if (!$valid) {
                $pesan = [
                    'error' => [
                        'name' => $validasi->getError('name'),
                        'telepon' => $validasi->getError('telepon'),
                        // 'avatar' => $validasi->getError('avatar'),
                    ]
                ];
            } else {
                $fileAva = $this->request->getFile('avatar');
                if ($fileAva->getFilename() != '') {
                    $namaAva = $fileAva->getRandomName();
                    $fileAva->move('img/users/', $namaAva);
                    $data['avatar'] = $namaAva;
                } else {
                    $data['avatar'] = user()->avatar;
                }
                // $this->userManual->where('email', $data['email']);
                if ($this->userManual->save($data)) {
                    $pesan['status'] = "Data Berhasil Diubah";
                }
            }
            echo json_encode($pesan);
        }
    }
}

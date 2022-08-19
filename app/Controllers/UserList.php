<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use Config\Services;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use \Hermawan\DataTables\DataTable;

class UserList extends BaseController
{


    public function index()
    {
        $data =
            [
                "title" => "User List",
                "page" => "user list",
            ];

        return view("/panel/list-user", $data);
    }

    public function getUser()
    {

        $db = db_connect();
        $builder = $db->table('users')->select('id, username, email, created_at, deleted_at');

        return DataTable::of($builder)
            ->addNumbering()
            ->add('Banned', function ($row) {
                return "<button type='button' class='btn btn-danger btn-sm' onclick='delete_user(" . $row->id . ")' >Banned</button>";
            })
            ->add('Banned', function ($row) {
                return "<button type='button' class='btn btn-primary btn-sm' onclick='edit(" . $row->id . ")' >Detail</button>";
            })
            //it will return data output with numbering on first column
            ->toJson();
    }

    public function deleteUser($id)
    {
        $model = new UserModel();
        $delete = $model->where('id', $id)->delete();
        if ($delete) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }

    public function edit($id)
    {
        $model = new UserModel();
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
        $model = new UserModel();
        if ($this->request->isAJAX()) {
            if ($this->request->getVar('deleted_at') !== null) {
                $data = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'name' => $this->request->getVar('name'),
                    'telepon'    => $this->request->getVar('telepon'),
                    'deleted_at' => null
                ];
            } else {
                $data = [
                    'username' => $this->request->getVar('username'),
                    'email'    => $this->request->getVar('email'),
                    'name' => $this->request->getVar('name'),
                    'telepon'    => $this->request->getVar('telepon')

                ];
            }
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

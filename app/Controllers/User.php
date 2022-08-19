<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel;
    protected $cookie;

    public function __construct()
    {
        $this->userModel = new UserModel();
        // $this->cookie = get_cookie('datauser') ? json_decode(get_cookie('datauser')) : '';
    }

    public function index()
    {
        return view('user/login');
    }

    public function login()
    {
        if ($this->request->isAJAX()) {
            // dd($this->request->getVar());
            // echo "Wow mantap";
            $where = [
                'email' => $this->request->getVar('email'),
                'password' => $this->request->getVar('password')
            ];
            $res = $this->userModel->where($where)->first();
            if ($res) {
                $res['login'] = true;
                set_cookie("datauser", json_encode($res), 3600);
                $msg = ["icon" => "success", "title" => "Berhasil Login", "text" => "Login Sukses, Segera Dialihkan Ke Panel", "login" => true];
                // echo json_encode(["pesan" => "Berhasil Login", "data" => $res]);
            } else {
                $msg = ["icon" => "error", "title" => "Login Gagal", "text" => "Login Gagal, Username / Password Salah", "login" => false];
            }
            echo json_encode($msg);
        } else {
            if (get_cookie('datauser')) {
                return redirect()->to(base_url('/panel'));
            }
            return view('user/login');
        }
    }

    public function logout()
    {
        if ($this->request->isAJAX()) {
            $cookie = json_decode(get_cookie('datauser'));
            if ($cookie) {
                delete_cookie('datauser');
                $msg = ["icon" => "success", "title" => "Logout Berhasil", "text" => "Logout"];
                echo json_encode($msg);
            }
        } else {
            echo "Cari apa";
        }
    }

    public function signup()
    {
        if ($this->request->isAJAX()) {
            $fileAva = $this->request->getFile('avatar');
            $namaAva = $fileAva->getRandomName();
            $fileAva->move('assets/images/users/avatar', $namaAva);

            $data = $this->request->getVar();
            unset($data['retype']);
            $data['avatar'] = $namaAva;

            $this->userModel->save($data);
            echo json_encode($data);
        } else {
            return view('user/daftar');
        }
    }
}

<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
    public function fasilitas1()
    {
        $data =
        [
            "title" => "Fasilitas 1",
            "page" => "Fasilitas",
        ];
        return view('fasilitas.php', $data);
    }
    public function fasilitas2()
    {
        $data =
        [
            "title" => "Fasilitas 2",
            "page" => "Fasilitas",
        ];
        return view('fasilitas2.php', $data);
    }
    public function fasilitas3()
    {
        $data =
        [
            "title" => "Fasilitas 3",
            "page" => "Fasilitas",
        ];
        return view('fasilitas3.php', $data);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
// <<<<<<< HEAD
        $data = 
        [
            "title" => "Nge-Lab by UNS",
            "page" => "home",
        ];
        // return view('dashboard', $data);

        return view('index', $data);

// =======
// <<<<<<< HEAD
//         $data = 
//         [
//             "title" => "Dashboard Admin",
//             "page" => "dashboard",
//         ];
//         return view('dashboard', $data);
// =======
//         return view('index');
// >>>>>>> 12548e5a3339385310a227fde88a4f08006649e4
//     }
        // return view('index.php');
// >>>>>>> 1591ca5605353debd897373dfcd47fab9ad96250
    }
    public function about()
    {
        $data =
        [
            "title" => "About",
            "page" => "about",
        ];
        return view('about.php', $data);
    }
    public function contact()
    {
        $data =
        [
            "title" => "Contact",
            "page" => "contact",
        ];
        return view('contact.php', $data);
    }
    // public function otp1()
    // {

    //     return view('user/otp1.php');
    // }
    // public function otp2()
    // {
    //     return view('user/otp2.php');
    // }
}   
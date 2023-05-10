<?php

namespace App\Controllers;

class Home extends BaseController
{
    //controller home
    public function index()
    {
        return view('welcome_message');
    }

    public function Home()
    {
        $data = [
            'title' => 'Halaman | Home',
        ];

        return view('index', $data);
    }


    //LOGIN
    public function login()
    {
        $data = [
            'title' => 'Login Sekarang',
        ];

        return view('login/form_login.php', $data);
    }
}

<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        if (session('id')) {
            return redirect()->to(base_url('home'));
        }

        $data = [
            'title' => 'Login Sekarang',
        ];

        return view('login/form_login.php', $data);
    }

    public function Home()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $data = [
            'title' => 'Halaman | Home',
        ];

        return view('index', $data);
    }


    //LOGIN
}

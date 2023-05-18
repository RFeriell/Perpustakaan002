<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\StaffModel;
use App\Models\BorrowerModel;
use App\Models\BorrowModel;

class Home extends BaseController
{

    protected $bookmodel;
    protected $staffmodel;
    protected $borrowermodel;
    protected $borrowmodel;
    public function __construct()
    {
        $this->bookmodel = new BookModel();
        $this->staffmodel = new StaffModel();
        $this->borrowermodel = new BorrowerModel();
        $this->borrowmodel = new BorrowModel();
    }
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
            'title' => 'Page | Home',
            'book' => $this->bookmodel->countAllResults(),
            'staff' => $this->staffmodel->countAllResults(),
            'borrower' => $this->borrowermodel->countAllResults(),
            'borrow' => $this->borrowmodel->countAllResults(),
        ];

        return view('index', $data);
    }
}

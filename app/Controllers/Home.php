<?php

namespace App\Controllers;

use App\Models\BookModel;
use App\Models\StaffModel;
use App\Models\BorrowerModel;
use App\Models\BorrowModel;
use App\Models\CategoryModel;
use App\Models\PublisherModel;

class Home extends BaseController
{

    protected $bookmodel;
    protected $staffmodel;
    protected $borrowermodel;
    protected $borrowmodel;
    protected $categorymodel;
    protected $publishermodel;
    public function __construct()
    {
        $this->bookmodel = new BookModel();
        $this->staffmodel = new StaffModel();
        $this->borrowermodel = new BorrowerModel();
        $this->borrowmodel = new BorrowModel();
        $this->categorymodel = new CategoryModel();
        $this->publishermodel = new PublisherModel();
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
            'jml_book' => $this->bookmodel->countAllResults(),
            'jml_staff' => $this->staffmodel->countAllResults(),
            'jml_borrower' => $this->borrowermodel->countAllResults(),
            'jml_borrow' => $this->borrowmodel->countAllResults(),
            'jml_publisher' => $this->publishermodel->countAllResults(),
            'jml_category' => $this->categorymodel->countAllResults(),
            'publisher' => $this->publishermodel->findAll(),
            'category' => $this->categorymodel->findAll(),
        ];

        return view('index', $data);
    }
}

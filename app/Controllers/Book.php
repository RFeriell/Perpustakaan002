<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;

class Book extends BaseController
{
    protected $bookmodel;
    public function __construct()
    {
        $this->bookmodel = new BookModel();
    }
    public function index()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }

        $book = $this->bookmodel->findAll();
        // $book->join('category', 'book.id_category = category.category');
        // dd($book);

        $data = [
            'title' => 'Page | Book',
            'book' => $book,
        ];

        return view('book/index', $data);
    }
}

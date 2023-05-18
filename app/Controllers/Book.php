<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;
use App\Models\CategoryModel;
use App\Models\publisherModel;

class Book extends BaseController
{
    protected $bookmodel;
    protected $categorymodel;
    protected $publisherkmodel;
    public function __construct()
    {
        $this->bookmodel = new BookModel();
        $this->categorymodel = new CategoryModel();
        $this->publisherkmodel = new PublisherModel();
    }
    public function index()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }

        $book = $this->bookmodel
        ->select('book.id as id,book.title,book.author,book.id_publisher,book.id_category,book.publication_year,book.quantity,publisher.name,category.category')
        ->join('publisher', 'book.id_publisher = publisher.id', 'left')
        ->join('category', 'book.id_category = category.id', 'left')
        ->findAll();
        // $book->join('category', 'book.id_category = category.category');
        // dd($book);

        $data = [
            'title' => 'Page | Book',
            'book' => $book,
        ];

        return view('book/index', $data);
    }

    public function add()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $book = $this->bookmodel
            ->select('book.id as id,book.title,book.author,book.publication_year,book.id_publisher,book.quantity,publisher.name,category.category')
            ->join('publisher', 'book.id_publisher = publisher.id', 'left')
            ->join('category', 'book.id = category.id', 'left')
            ->findAll();
        $publisher = $this->publisherkmodel->findAll();
        $category = $this->categorymodel->findAll();

        $data = array(
            'title' => 'Page Add Book',
            'judul' => 'Add Book',
            'book'  => $book,
            'category'  => $category,
            'publisher'  => $publisher,
        );

        return view('book/form.php', $data);
    }

    public function addpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();
        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'buku sudah terdaftar'
                ],
            ],
            'author' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'publication_year' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'min_length' => 'masukan tahun yang benar'
                ],
            ],
            'id_publisher' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'id_category' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'quantity' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('book-add')->withInput();
        };

        $this->bookmodel->save([
            'title' => $post['title'],
            'author' => $post['author'],
            'publication_year' => $post['publication_year'],
            'id_publisher' => $post['id_publisher'],
            'id_category' => $post['id_category'],
            'quantity' => $post['quantity'],
        ]);
        return redirect()->to('book')->with('info', 'data berhasil ditambah');
    }

    public function edit($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $publisher = $this->publisherkmodel->findAll();
        $category = $this->categorymodel->findAll();
        $data = [
            'item' => $this->bookmodel->where(['id' => $id])->first(),
            'id' => $id,
            'title' => 'Page Edit Book',
            'judul' => 'Edit Book',
            'publisher' => $publisher,
            'category' => $category,

        ];

        return view('book/form', $data);
    }

    public function editpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();
        if (!$this->validate([
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'buku sudah terdaftar'
                ],
            ],
            'author' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'publication_year' => [
                'rules' => 'required|min_length[4]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'min_length' => 'masukan tahun yang benar'
                ],
            ],
            'id_publisher' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'id_category' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'quantity' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('book-edit/' . $post['id'])->withInput();
        };

        $this->bookmodel->save([
            'id' => $post['id'],
            'title' => $post['title'],
            'author' => $post['author'],
            'publication_year' => $post['publication_year'],
            'id_publisher' => $post['id_publisher'],
            'id_category' => $post['id_category'],
            'quantity' => $post['quantity'],
        ]);
        return redirect()->to('book')->with('info', 'data berhasil ditambah');
    }

    public function delete($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $delete = $this->bookmodel->delete($id);
        if ($delete) {
            return redirect()->to('book');
        }
    }
}

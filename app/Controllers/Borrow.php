<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BorrowerModel;
use App\Models\StaffModel;
use App\Models\BookModel;
use App\Models\BorrowModel;

class Borrow extends BaseController
{
    protected $borrowermodel;
    protected $staffmodel;
    protected $bookmodel;
    protected $borrowmodel;
    public function __construct()
    {
        $this->borrowmodel = new BorrowModel();
        $this->bookmodel = new BookModel();
        $this->staffmodel = new StaffModel();
        $this->borrowermodel = new BorrowerModel();
    }

    public function index()
    {

        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $borrow = $this->borrowmodel
            ->join('borrower', 'borrow.id_borrower = borrower.id', 'left')
            ->join('book', 'borrow.id_book = book.id', 'left')
            ->join('staff', 'borrow.id_staff = staff.id', 'left')
            ->select('borrow.id as id,borrow.id_borrower,borrow.id_book,borrow.id_staff,borrow.release_date,borrow.due_date,borrow.note,book.title,staff.name as staff,borrower.name')
            ->findAll();

        $data = [
            'title' => 'Page Borrow',
            'borrow' => $borrow,
        ];
        return view('borrow/index', $data);
    }


    public function add()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $staff = $this->staffmodel->findAll();
        $book = $this->bookmodel->findAll();
        $borrower = $this->borrowermodel->findAll();

        $data = array(
            'title' => 'Page Edit Borrow',
            'judul' => 'Add Borrow',
            'book'  => $book,
            'staff'  => $staff,
            'borrower'  => $borrower,
        );

        return view('borrow/form.php', $data);
    }

    public function addpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();
        if (!$this->validate([
            'id_borrower' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'id_book' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'release_date' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'due_date' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('borrow-add')->withInput();
        };

        $this->borrowmodel->save([
            'id_borrower' => $post['id_borrower'],
            'id_book' => $post['id_book'],
            'release_date' => $post['release_date'],
            'due_date' => $post['due_date'],
            'id_staff' => session('id'),
            'note' => "Pinjam",
        ]);
        return redirect()->to('borrow')->with('info', 'data berhasil ditambah');
    }

    public function edit($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $staff = $this->staffmodel->findAll();
        $book = $this->bookmodel->findAll();
        $borrower = $this->borrowermodel->findAll();

        $data = array(
            'item' => $this->borrowmodel->where(['id' => $id])->first(),
            'id' => $id,
            'title' => 'Page Edit Borrow',
            'judul' => 'Edit borrow',
            'book'  => $book,
            'staff'  => $staff,
            'borrower'  => $borrower,
        );

        return view('borrow/form', $data);
    }

    public function editpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();

        if (!$this->validate([
            'id_borrower' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'id_book' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'release_date' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'due_date' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('borrow-edit/' . $post['id'])->withInput();
        };

        $this->borrowmodel->save([
            'id' => $post['id'],
            'id_borrower' => $post['id_borrower'],
            'id_book' => $post['id_book'],
            'release_date' => $post['release_date'],
            'due_date' => $post['due_date'],
            'id_staff' => session('id'),
            'note' => "Pinjam",
        ]);
        return redirect()->to('borrow')->with('info', 'data berhasil ditambah');
    }

    public function delete($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $delete = $this->borrowmodel->delete($id);
        if ($delete) {
            return redirect()->to('borrow');
        }
    }
}

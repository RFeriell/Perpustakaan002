<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BorrowerModel;

class Borrower extends BaseController
{
    protected $borrowermodel;
    public function __construct()
    {
        $this->borrowermodel = new BorrowerModel();
    }
    public function index()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $data = [
            'title' => 'Page Category',
            'borrower' => $this->borrowermodel->findAll(),
        ];
        return view('borrower/index', $data);
    }

    public function add()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $data = array(
            'title' => 'Page Add Borrower',
            'judul' => 'Add borrower',
        );

        return view('borrower/form.php', $data);
    }

    public function addpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();

        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[borrower.name]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'Data sudah Terdaftar'
                ],
            ],
            'birthdate' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'address' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => ['required' => 'pilih salah satu'],
            ],
            'contact' => [
                'rules' => 'required',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'email' => [
                'rules' => 'required|is_unique[borrower.email]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'email sudah terdaftar'
                ],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('borrower-add')->withInput();
        }

        $this->borrowermodel->save([
            'name' => $post['name'],
            'birthdate' => $post['birthdate'],
            'address' => $post['address'],
            'gender' => $post['gender'],
            'contact' => $post['contact'],
            'email' => $post['email'],
        ]);
        return redirect()->to('borrower')->with('info', 'data berhasil ditambah');
    }

    public function edit($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $data = [
            'item' => $this->borrowermodel->where(['id' => $id])->first(),
            'id' => $id,
            'title' => 'Page Edit Borrower',
            'judul' => 'Edit Borrower'
        ];

        return view('borrower/form', $data);
    }

    public function editpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();
        $datapost = $this->borrowermodel->where(['id' => $post['id']])->first();

        if ($post['name'] == $datapost['name'] or $post['email' == $datapost['email']]) {
            if (!$this->validate([
                'birthdate' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'address' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'gender' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'pilih salah satu'],
                ],
                'contact' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
            ])) {
                $validation = \config\Services::validation();
                session()->setFlashdata('validation', $validation->getErrors());
                return redirect()->to('borrower-edit/' . $post['id'])->withInput();
            }
            $this->borrowermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'birthdate' => $post['birthdate'],
                'address' => $post['address'],
                'gender' => $post['gender'],
                'contact' => $post['contact'],
                'email' => $post['email'],

            ]);
            return redirect()->to('borrower')->with('info', 'data berhasil ditambah');
        } else {
            if (!$this->validate([
                'name' => [
                    'rules' => 'required|is_unique[borrower.name]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'is_unique' => 'Data sudah Terdaftar'
                    ],
                ],
                'birthdate' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'address' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'gender' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'pilih salah satu'],
                ],
                'contact' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'email' => [
                    'rules' => 'required|is_unique[borrower.email]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'is_unique' => 'email sudah terdaftar'
                    ],
                ],
            ])) {
                $validation = \config\Services::validation();
                session()->setFlashdata('validation', $validation->getErrors());
                return redirect()->to('borrower-add')->withInput();
            }
            $this->borrowermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'birthdate' => $post['birthdate'],
                'address' => $post['address'],
                'gender' => $post['gender'],
                'contact' => $post['contact'],
                'email' => $post['email'],
            ]);
            return redirect()->to('borrower')->with('info', 'data berhasil ditambah');
        }
    }

    public function delete($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $delete = $this->borrowermodel->delete($id);
        if ($delete) {
            return redirect()->to('borrower');
        }
    }
}

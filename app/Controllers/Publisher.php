<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PublisherModel;

class Publisher extends BaseController
{
    protected $publishermodel;
    public function __construct()
    {
        $this->publishermodel = new PublisherModel();
    }
    public function index()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $data = [
            'title' => 'Page Publisher',
            'publisher' => $this->publishermodel->findAll(),
        ];
        return view('publisher/index', $data);
    }

    public function add()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda harus login');
        }
        $data = array(
            'title' => 'Page Add Publisher',
            'judul' => 'Add Publisher',
        );

        return view('publisher/form.php', $data);
    }

    public function addpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();

        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[publisher.name]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'is_unique' => 'publisher sudah terdaftar'
                ],
            ],
            'address' => [
                'rules' => 'required|is_unique[publisher.address]',
                'errors' => ['required' => 'wajib diisi'],
            ],
            'contact' => [
                'rules' => 'required|min_length[8]',
                'errors' => [
                    'required' => 'wajib diisi',
                    'min_length' => 'minimal 8 karakter'
                ],
            ],
        ])) {
            $validation = \config\Services::validation();
            session()->setFlashdata('validation', $validation->getErrors());
            return redirect()->to('publisher-add')->withInput();
        }

        $this->publishermodel->save([
            'name' => $post['name'],
            'address' => $post['address'],
            'contact' => ($post['contact']),
        ]);
        return redirect()->to('publisher')->with('info', 'data berhasil ditambah');
    }

    public function edit($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $data = [
            'item' => $this->publishermodel->where(['id' => $id])->first(),
            'id' => $id,
            'title' => 'Page Edit Publisher',
            'judul' => 'Edit Publisher'
        ];

        return view('publisher/form', $data);
    }

    public function editpro()
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $post = $this->request->getPost();
        $datapost = $this->publishermodel->where(['id' => $post['id']])->first();

        if ($post['name'] == $datapost['name']) {
            if (!$this->validate([
                'address' => [
                    'rules' => 'required|is_unique[publisher.address]',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'contact' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'min_length' => 'minimal 8 karakter'
                    ],
                ],
            ])) {
                $validation = \config\Services::validation();
                session()->setFlashdata('validation', $validation->getErrors());
                return redirect()->to('publisher-add')->withInput();
            }
            $this->publishermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'address' => $post['address'],
                'contact' => $post['contact'],
            ]);
            return redirect()->to('publisher')->with('info', 'data berhasil ditambah');
        } else {
            if (!$this->validate([
                'name' => [
                    'rules' => 'required|is_unique[publisher.name]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'is_unique' => 'publisher sudah terdaftar'
                    ],
                ],
                'address' => [
                    'rules' => 'required',
                    'errors' => ['required' => 'wajib diisi'],
                ],
                'contact' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'wajib diisi',
                        'min_length' => 'minimal 8 karakter'
                    ],
                ],
            ])) {
                $validation = \config\Services::validation();
                session()->setFlashdata('validation', $validation->getErrors());
                return redirect()->to('publisher-edit/' . $post['id'])->withInput();
            }
            $this->publishermodel->save([
                'id'    => $post['id'],
                'name' => $post['name'],
                'address' => $post['address'],
                'contact' => $post['contact'],
            ]);
            return redirect()->to('publisher')->with('info', 'data berhasil ditambah');
        }
    }

    public function delete($id)
    {
        if (!session('id')) {
            return redirect()->to(base_url())->with('error', 'Anda Harus Login');
        }

        $delete = $this->publishermodel->delete($id);
        if ($delete) {
            return redirect()->to('publisher');
        }
    }
}

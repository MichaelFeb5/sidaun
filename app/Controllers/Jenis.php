<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataJenis;
use CodeIgniter\Validation\Rules;
use CodeIgniter\Validation\Exceptions\ValidationException;

class Jenis extends BaseController
{
    protected $validation;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

        $data['title'] = 'Jenis';
        return view('Jenis/index', $data);
    }

    public function grid()
    {
        $DataJenis = new \App\Models\DataJenis();
        $data = $DataJenis->findAll();

        $response = [
            'data' => $data
        ];

        return $this->response->setJSON($response);
    }

    public function tambah()
    {
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

        $data['title'] = 'Jenis';
        return view('Jenis/form', $data);
    }

    public function detail($id)
    {
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

        $DataJenis = new \App\Models\DataJenis();
        $response = $DataJenis->find($id);
        $data = [
            'title' => 'Jenis',
            'model' => $response,
        ];

        return view('Jenis/formEdit', $data);
    }

    public function simpan()
    {
        $DataJenis = new \App\Models\DataJenis();
        $validationRules = [
            'nama_genus' => [
                'rules'  => 'required|alpha_numeric_space',
                'errors' => [
                    'required' => 'Jenis Harus Diisi.',
                ],
            ],
            'nama_family'    => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Family harus diisi.',
                ],
            ],
        ];

        $this->validation->setRules($validationRules);

        // Take data dari view & check data jika ada validasi
        $isNew = $this->request->getPost('isNew');
        $data = ($this->request->getPost('model') ? $this->request->getPost('model') : []);

        if (!$this->validation->run($data)) {
            $res['validasi'] = $this->validation->getErrors();
            return $this->response->setJSON($res);
        }

        // Insert data jika validasi tidak terpenuhi
        if ($isNew == 1) {
            $res = $DataJenis->insert($data);
            return $this->response->setJSON($res);
        } else {
            $res = $DataJenis->update($data['id_genus'], $data);
            return $this->response->setJSON($res);
        }
    }

    public function hapus($id)
    {
        $DataJenis = new \App\Models\DataJenis();
        $response = $DataJenis->delete($id);

        return $this->response->setJSON($response);
    }
}

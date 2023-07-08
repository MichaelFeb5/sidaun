<?php

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Controllers\BaseController;
use CodeIgniter\Validation\Rules;
use CodeIgniter\Validation\Exceptions\ValidationException;


class Login extends BaseController
{
    protected $validation;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        return view('Login/index');
    }

    public function registrasi()
    {
        $data['tittle'] = 'Registrasi';
        return view('Login/registrasi.php');
    }

    public function check()
    {
        // Inisialisasi Data Model
        $tb_akun = new \App\Models\Akun();
        $data = ($this->request->getPost('model') ? $this->request->getPost('model') : []);
        $akun = $tb_akun->find($data['username']);
        $res = [];

        if ($akun) {
            // Akun ditemukan, cek password
            if (password_verify($data['password'], $akun->password)) {
                $res['code'] = 200;
                $res['akun'] = $akun;

                helper('cookie');
                $expire = 3600; // Waktu kadaluarsa cookie dalam detik (misalnya 1 jam)

                $expire = time() + 3600; // Waktu kadaluarsa cookie dalam detik (misalnya 1 jam)
                $cookieValue = json_encode($akun);
                setcookie('akun', $cookieValue, $expire, '/');
            } else {
                $res['code'] = 201;
                $res['codeText'] = "Password Salah";
            }
        } else {
            $res['code'] = 202;
            $res['codeText'] = "Akun Tidak Ditemukan";
        }
        return $this->response->setJSON($res);
    }

    public function simpanRegistrasi()
    {
        // Inisialisasi Data Model
        $tb_akun = new \App\Models\Akun();

        // Insisialisasi validasi
        $validationRules = [
            'username' => [
                'rules'  => 'required|alpha_numeric_space|min_length[5]',
                'errors' => [
                    'required' => 'Username Harus Diisi.',
                ],
            ],
            'password'    => [
                'rules'  => 'required|min_length[8]|max_length[100]',
                'errors' => [
                    'required' => 'Password harus diisi.',
                ],
            ],
        ];
        $this->validation->setRules($validationRules);

        // Take data dari view & check data jika ada validasi
        $data = ($this->request->getPost('model') ? $this->request->getPost('model') : []);
        if (!$this->validation->run($data)) {
            $res['validasi'] = $this->validation->getErrors();
            return $this->response->setJSON($res);
        }

        // Insert data jika validasi tidak terpenuhi
        $options = [
            'cost' => 10,
        ];

        $data['password'] = password_hash($data['password'],  PASSWORD_DEFAULT, $options);
        $res = $tb_akun->insert($data);
        return $this->response->setJSON($res);
    }
}

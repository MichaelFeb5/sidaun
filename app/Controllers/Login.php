<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('Login/index.php');
    }

    public function simpan()
    {
        // Insisialisasi Model
        $tb_akun = new \App\Models\tb_akun();

        // Take Data from view
        $data = ($this->request->getPost('model') ? $this->request->getPost('model') : []);
        $res = $tb_akun->insert($data);
        return $this->response->setJSON($res);
    }

    public function registrasi()
    {
        return view('Registrasi/index.php');
    }
}

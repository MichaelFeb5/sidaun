<?php

namespace App\Controllers;

class Tanaman extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tanaman';
        return view('Tanaman/index', $data);
    }

    public function tambah()
    {
        $data['title'] = 'Tanaman';
        return view('Tanaman/form', $data);
    }
}

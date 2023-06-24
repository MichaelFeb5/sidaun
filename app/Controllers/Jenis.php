<?php

namespace App\Controllers;

class Jenis extends BaseController
{
    public function index()
    {
        $data['title'] = 'Jenis';
        return view('Jenis/index', $data);
    }
}

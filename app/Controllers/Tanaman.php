<?php

namespace App\Controllers;

class Tanaman extends BaseController
{
    public function index()
    {
        $data['title'] = 'Tanaman';
        return view('Tanaman/index', $data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datatables extends BaseController
{
    public function index()
    {
        $data['title'] = 'Data Table';
        return view('crud/index', $data);
    }
}

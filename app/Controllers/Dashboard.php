<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataTanaman;
use Config\Services;

class Dashboard extends BaseController
{
    public function index()
    {
        helper('cookie');

        $DataTanaman = new \App\Models\DataTanaman();
        
        $data = [
            'title' => 'Dashboard',
        ];

        return view('dashboard/index', $data);
    }
}

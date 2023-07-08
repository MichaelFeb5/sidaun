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
        $DataJenis = new \App\Models\DataJenis();

        $res = $DataTanaman->getTotalRows();
        $res2 = $DataJenis->getTotalRows();

        $data = [
            'title' => 'Dashboard',
            'totalTanaman' => $res,
            'totalGenus' => $res2,
        ];

        return view('dashboard/index', $data);
    }
}

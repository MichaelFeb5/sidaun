<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Viewer extends BaseController
{
    public function index()
    {
        // $DataTanaman = new \App\Models\DataTanaman();
        // $response = $DataTanaman->getDetailWithJenis($id);

        $data = [
            'title' => 'viewer',
            // 'dataTanaman' => json_encode($response),
        ];

        return view('Viewer/index', $data );
    }
}

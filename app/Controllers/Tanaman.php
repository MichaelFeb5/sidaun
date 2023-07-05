<?php

namespace App\Controllers;

class Tanaman extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tanaman',
        ];
        return view('Tanaman/index', $data);
    }

    public function tambah()
    {
        $DataJenis = new \App\Models\DataJenis();
        $jenis = $DataJenis->findAll();

        $data = [
            'title' => 'Tanaman',
            'dataJenis' => json_encode($jenis),
        ];
        return view('Tanaman/form', $data);
    }

    public function getDataJenis()
    {
        $DataJenis = new \App\Models\DataJenis();
        $data = $DataJenis->findAll();

        $response = [
            'data' => $data
        ];

        return $this->response->setJSON($response);
    }
}

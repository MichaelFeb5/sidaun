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

    public function detail($id)
    {
        $DataTanaman = new \App\Models\DataTanaman();
        $response = $DataTanaman->getDetailWithJenis($id);

        $data = [
            'title' => 'Tanaman',
            'dataTanaman' => json_encode($response),
        ];

        return view('Tanaman/detail', $data);
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

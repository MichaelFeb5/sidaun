<?php

namespace App\Controllers;

use App\Models\DataTanaman;
use App\Controllers\BaseController;

class Viewer extends BaseController
{

    protected $tanamanModel;
    protected $jenisModel;
    public function __construct()
    {
        $this->tanamanModel = new DataTanaman();
    }

    public function index()
    {
        
        $pohon = $this->tanamanModel->getAll();
        $data = [
            'title' => 'Data Table',
            'pohon' => $pohon
        ];

        return view('crud/index', $data);
    }

    public function details($id = null)
{
    if ($id !== null) {
        $pohon = $this->tanamanModel->getById($id);
        $data = [
            'title' => 'Data Table',
            'pohon' => $pohon
        ];
        return view('viewer/index', $data);
    } else {
        // Handle jika $id tidak diberikan, misalnya menampilkan pesan error atau mengalihkan ke halaman lain
        return redirect()->to('/error');
    }
}

}

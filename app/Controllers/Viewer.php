<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Models\DataTanaman;
=======
>>>>>>> bc0fd93f51a0f22bbd792ed27cd623844ec127fe
use App\Controllers\BaseController;

class Viewer extends BaseController
{
<<<<<<< HEAD

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
=======
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
>>>>>>> bc0fd93f51a0f22bbd792ed27cd623844ec127fe

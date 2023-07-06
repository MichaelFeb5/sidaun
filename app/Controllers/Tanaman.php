<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataTanaman;
use CodeIgniter\Validation\Rules;
use CodeIgniter\Validation\Exceptions\ValidationException;

class Tanaman extends BaseController
{
    protected $validation;

    public function __construct()
    {
        $this->validation = \Config\Services::validation();
    }

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

    public function simpan()
    {
        $DataTanaman = new \App\Models\DataTanaman();
        $isNew = $this->request->getPost('isNew');
        $data = ($this->request->getPost('model') ? $this->request->getPost('model') : []);
        
        if (!empty($data)) {
            $data = json_decode($data);
            $data = json_decode(json_encode($data), true);
        }

        // Ambil file gambar dari request
        $gambar = $this->request->getFile('file');

        // Cek apakah file gambar berhasil diunggah
        if ($gambar->isValid() && !$gambar->hasMoved()) {
            // Tentukan direktori penyimpanan gambar
            $directory = 'assets/images/tanaman';

            // Generate nama unik untuk gambar
            $namaFile = $gambar->getRandomName();

            // Pindahkan gambar ke direktori tujuan
            $gambar->move($directory, $namaFile);

            // Simpan nama file gambar dalam $data
            $data['gambar'] = $namaFile;
        } else {
            // Jika tidak ada gambar yang diunggah, set $data['gambar'] menjadi null atau kosong
            $data['gambar'] = null;
        }

        if ($isNew == 1) {
            $res = $DataTanaman->insert($data);
            return $this->response->setJSON($res);
        } else {
            $res = $DataTanaman->update($data['id_tanaman'], $data);
            return $this->response->setJSON($res);
        }
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

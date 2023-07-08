<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;
use CodeIgniter\Files\FileHelper;
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
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

        $data = [
            'title' => 'Tanaman',
        ];
        return view('Tanaman/index', $data);
    }

    public function grid()
    {
        $DataTanaman = new \App\Models\DataTanaman();
        $data = $DataTanaman->getAllWithJenis();

        $response = [
            'data' => $data,
        ];

        return $this->response->setJSON($response);
    }

    public function detailEdit($id)
    {
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

        $DataTanaman = new \App\Models\DataTanaman();
        $response = $DataTanaman->getDetailWithJenis($id);

        $DataJenis = new \App\Models\DataJenis();
        $jenis = $DataJenis->findAll();

        $data = [
            'title' => 'Tanaman',
            'dataJenis' => json_encode($jenis),
            'model' => json_decode(json_encode($response), true)
        ];
        return view('Tanaman/formEdit', $data);
    }

    public function tambah()
    {
        if (!$this->request->getCookie('akun')) {
            return redirect()->to(base_url()); // Redirect ke halaman login
        }

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

            if ($isNew == 1) {
                // Generate nama unik untuk gambar
                $namaFile = $gambar->getRandomName();
                // Pindahkan gambar ke direktori tujuan
                $gambar->move($directory, $namaFile);
                // Simpan nama file gambar dalam $data
                $data['gambar'] = $namaFile;
            } else {
                if ($gambar->getClientName() != "blob") {
                    // Hapus Gambar Terdahulu
                    $namaGambarTerdahulu = $data['gambar']; // Ganti dengan nama file gambar yang ingin dihapus
                    $lokasiGambarTedahulu = 'assets/images/tanaman/' . $namaGambarTerdahulu;

                    if (file_exists($lokasiGambarTedahulu)) {
                        unlink($lokasiGambarTedahulu);
                    }

                    // Set Gambar Terbaru
                    $namaFile = $gambar->getRandomName();
                    $gambar->move($directory, $namaFile);
                    $data['gambar'] = $namaFile;
                }
            }
        } else {
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

    public function hapus($id)
    {
        $DataTanaman = new \App\Models\DataTanaman();
        $data = $DataTanaman->find($id);
        $pathGambar = "assets/images/tanaman/" . $data['gambar'];

        if (file_exists($pathGambar)) {
            unlink($pathGambar);
        }

        $response = $DataTanaman->delete($id);

        return $this->response->setJSON($response);
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

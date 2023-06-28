<?php

namespace App\Controllers;

use App\Models\DataPohon;
use App\Models\DataJenis;
use App\Controllers\BaseController;

class Datatables extends BaseController

{
    protected $pohonModel;
    protected $jenisModel;
    public function __construct( )
    {
        $this-> pohonModel = new DataPohon();
        $this-> jenisModel = new DataJenis();
    }

    public function index()
    {
        
        $pohon = $this->pohonModel->getAll();
        $data = [
            'title' => 'Data Table',
            'pohon' => $pohon
        ];

        return view('crud/index', $data);
    }
}

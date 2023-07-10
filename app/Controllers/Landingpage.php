<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Landingpage extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Landing Page',
        ];

        return view('landing-page/index', $data);
    }

    public function aboutus()
    {
        $data = [
            'title' => 'Landing Page',
        ];

        return view('landing-page/aboutUs', $data);
    }
    
    public function contact()
    {
        $data = [
            'title' => 'Landing Page',
        ];

        return view('landing-page/contact', $data);
    }
}

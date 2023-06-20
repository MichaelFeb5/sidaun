<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        $data['data'] = 'test';
        return view('Home/index', $data);
    }
}

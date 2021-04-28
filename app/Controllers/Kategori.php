<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    protected $session;


    function __construct()
    {

        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function index()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('kategori/kategori', $data);
    }
}

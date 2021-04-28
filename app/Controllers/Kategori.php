<?php

namespace App\Controllers;

use App\Models\KategoriModel;

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
        $kategorimodel = new KategoriModel();
        $kategori = $kategorimodel->findAll();
        $data = [
            'name' => $this->session->name,
            'kategori' => $kategori,
        ];
        return view('kategori/kategori', $data);
    }
}

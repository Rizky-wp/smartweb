<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Dashboard extends BaseController
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
        return view('home/home', $data);
    }

    public function home()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('home/home', $data);
    }
    public function episode()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('search/episode', $data);
    }

    public function comment()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('comment/comment', $data);
    }

    public function kategori($kategori)
    {
        $kategoriModel = new KategoriModel();
        $kategori = $kategori;
        $data_pod = $kategoriModel->kategori($kategori);
        // dd($data_pod);
        $data = [
            'name' => $this->session->name,
            'data_pod' => $data_pod,
        ];
        return view('kategori/isi', $data);
    }
    public function about()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('about/about', $data);
    }
}

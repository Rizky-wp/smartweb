<?php

namespace App\Controllers;

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
    public function isi()
    {
        $data = [
            'name' => $this->session->name,
        ];
        return view('kategori/isi', $data);
    }
}

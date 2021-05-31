<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'pod_kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_kategori'
    ];

    public function kategori($kategori)
    {
        $this->join('podcast', 'pod_kategori.id_kategori = podcast.id_kategori', 'LEFT');
        $this->select('podcast.id_pod, podcast.name_podcast, podcast.url');
        $this->where('pod_kategori.nama_kategori', $kategori);
        $result = $this->findAll();


        return $result;
    }
}

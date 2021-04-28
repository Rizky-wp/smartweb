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
}

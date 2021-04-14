<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'telepon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'nama', 'nomor'
    ];

    public function findById($id)
    {
        $data = $this->find($id);
        if ($data) {
            return $data;
        }
        return false;
    }
}

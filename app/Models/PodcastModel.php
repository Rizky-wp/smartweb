<?php

namespace App\Models;

use CodeIgniter\Model;

class PodcastModel extends Model
{
    protected $table = 'podcast';
    protected $primaryKey = 'id_pod';
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'id_pod', 'id_kategori', 'name_podcast', 'url'
    ];
}

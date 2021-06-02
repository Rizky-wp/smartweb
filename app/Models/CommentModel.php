<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $primaryKey = 'id_comment';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id_user', 'id_pod', 'id_episode', 'isi'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
}

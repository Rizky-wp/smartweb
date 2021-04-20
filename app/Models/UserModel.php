<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'name';
    protected $allowedFields = [
        'name', 'accToken', 'refreshToken'
    ];
}

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
    public function komen($id_episode, $offset)
    {
        $this->join('user', 'comment.id_user = user.id', 'LEFT');
        $this->select('comment.isi, comment.created_at, user.name');
        $this->where('comment.id_episode', $id_episode);
        $this->orderBy('created_at', 'ASC');
        $result = $this->findAll(5,  $offset);


        return $result;
    }
}

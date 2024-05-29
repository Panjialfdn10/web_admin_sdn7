<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $returnType       = 'object';
    protected $allowedFields    = ['username', 'password'];

    public function getUser($username, $password)
    {
        $query = $this->db->table('user')
            ->select('user.*') 
            ->where('user.username', $username)
            ->where('user.password', $password)
            ->get();
        return $query->getRow();
    }
  

}

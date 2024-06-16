<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table            = 'materi';
    protected $primaryKey       = 'idMateri';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['namaMateri', 'imageMateri'];

    public function getMateri() {
        $query = $this->db->table('materi')
        ->select('materi.*, kelolamateri.*') 
        ->join('kelolamateri', 'kelolamateri.idmateri = materi.idmateri')
        ->get();
    return $query->getResult();
    }
}

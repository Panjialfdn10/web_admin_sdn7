<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'id_siswa';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['no_nis','nama_siswa','jenis_kelamin','alamat_siswa','poto_siswa','email', 'no_hp'];

    public function find_by_nis($no_nis)
    {
        $query = $this->db->table('siswa')
            ->select('siswa.*') 
            ->where('siswa.no_nis', $no_nis)
            ->get();
        return $query->getRow();
    }

}

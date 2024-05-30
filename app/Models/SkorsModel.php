<?php

namespace App\Models;

use CodeIgniter\Model;

class SkorsModel extends Model
{
    protected $table            = 'skors';
    protected $primaryKey       = 'id_skors';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['id_siswa', 'skors'];

    public function get_all_Skors() {
        $query = $this->db->table('skors')
            ->select('skors.*, siswa.*')
            ->join('siswa', 'skors.id_siswa = siswa.id_siswa')
            ->get();
        return $query->getResult();
    }

}

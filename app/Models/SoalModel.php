<?php

namespace App\Models;

use CodeIgniter\Model;

class SoalModel extends Model
{
    protected $table            = 'soal';
    protected $primaryKey       = 'id_soal';
    protected $returnType       = 'object';
    protected $allowedFields = ['pertanyaan', 'pilihan_a', 'pilihan_b', 'pilihan_c', 'pilihan_d', 'jawaban'];
}

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

}

<?php

namespace App\Models;

use CodeIgniter\Model;

class KelolaMateriModel extends Model
{
    protected $table            = 'kelolamateri';
    protected $primaryKey       = 'idKontenMateri';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['deskripsiKontenMateri', 'idMateri', 'ciriCiriKontenMateri', 'imageKontenMateri'];

}

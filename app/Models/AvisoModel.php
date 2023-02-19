<?php

namespace App\Models;

use CodeIgniter\Model;

class AvisoModel extends Model
{
    protected $table            = 'avisos';
    protected $returnType       = 'App\Entities\Aviso';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'aviso',
        'icone',
        'detalhes',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';
}

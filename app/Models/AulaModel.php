<?php

namespace App\Models;

use CodeIgniter\Model;

class AulaModel extends Model
{
    protected $table            = 'aulas';
    protected $returnType       = 'App\Entities\Aula';
    protected $allowedFields    = [
        'titulo',
        'descricao',
        'recurso',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
}

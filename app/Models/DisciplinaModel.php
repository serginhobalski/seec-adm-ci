<?php

namespace App\Models;

use CodeIgniter\Model;

class DisciplinaModel extends Model
{
    protected $table            = 'disciplinas';
    protected $returnType       = 'App\Entities\Disciplina';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'descricao',
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

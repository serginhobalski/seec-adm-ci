<?php

namespace App\Models;

use CodeIgniter\Model;

class CursoModel extends Model
{
    protected $table            = 'cursos';
    protected $returnType       = 'App\Entities\Curso';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'descricao',
        'valor',
        'ativo',
        'categoria',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [
        'nome' => 'required|is_unique[grupos.nome,id,{id}]',
    ];
    protected $validationMessages   = [
        'nome' => [
            'required' => '<b class="text-danger">Coloque o nome do Curso.</b>',
            'is_unique' => '<b class="text-danger">Este nome de grupo já está em uso.</b>',
        ],
    ];
}

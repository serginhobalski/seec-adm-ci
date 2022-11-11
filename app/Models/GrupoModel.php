<?php

namespace App\Models;

use CodeIgniter\Model;

class GrupoModel extends Model
{
    protected $table            = 'grupos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Grupo';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'descricao',
        'exibir',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [
        'nome' => 'required|is_unique[grupos.nome,id,{id}]',
        'descricao' => 'required',
    ];
    protected $validationMessages   = [
        'nome' => [
            'required' => '<b class="text-danger">Coloque o nome do grupo.</b>',
            'is_unique' => '<b class="text-danger">Este nome de grupo já está em uso.</b>',
        ],
        'descricao ' => [
            'required' => '<b class="text-danger">Coloque uma descrição para o grupo.</b>',
        ],
    ];
}

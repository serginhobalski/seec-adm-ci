<?php

namespace App\Models;

use CodeIgniter\Model;

class RelatorioModel extends Model
{
    protected $table            = 'relatorios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Relatorio';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'local',
        'mes',
        'ano',
        'valor',
        'comprovante',
        'relatorio',
        'obs',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [
        'nome' => 'required',
        'local' => 'required',
        'mes' => 'required',
        'ano' => 'required',
        'valor' => 'required',
    ];
    protected $validationMessages   = [
        'nome' => [
            'required' => 'O campo "Nome" é obrigatório',
        ],
        'local' => [
            'required' => 'O campo "Local" é obrigatório',
        ],
        'mes' => [
            'required' => 'O campo "Mês" é obrigatório',
        ],
        'ano' => [
            'required' => 'O campo "Ano" é obrigatório',
        ],
        'valor' => [
            'required' => 'O campo "Valor" é obrigatório',
        ],
    ];

    // Callbacks
    protected $beforeInsert   = [];
    protected $beforeUpdate   = [];
}

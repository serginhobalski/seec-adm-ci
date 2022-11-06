<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultadoEnaqModel extends Model
{
    protected $table            = 'resultadoenaqs';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'ano',
        'regiao',
        'cidade',
        'nome',
        'prova_objetiva',
        'redacao',
        'media',
        'situacao',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];

    // Callbacks
    protected $beforeInsert   = [];
    protected $beforeUpdate   = [];
}

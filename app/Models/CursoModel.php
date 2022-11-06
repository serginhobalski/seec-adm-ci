<?php

namespace App\Models;

use CodeIgniter\Model;

class CursoModel extends Model
{
    protected $table            = 'cursos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'titulo',
        'descricao',
        'valor',
        'categoria',
        'imagem',
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

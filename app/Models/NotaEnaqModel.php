<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaEnaqModel extends Model
{
    protected $table            = 'enaq_notas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\EnaqNota';
    protected $allowedFields    = [
        'ano',
        'local',
        'nome',
        'categoria',
        'prova',
        'redacao',
        'media',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';
}

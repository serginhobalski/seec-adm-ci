<?php

namespace App\Models;

use CodeIgniter\Model;

class EventoModel extends Model
{
    protected $table            = 'eventos';
    protected $returnType       = 'App\Entities\Evento';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'titulo',
        'descricao',
        'local',
        'detalhes',
        'tipo',
        'status',
        'data_inicio',
        'hora_inicio',
        'data_termino',
        'hora_termino',
        'imagem',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';
}

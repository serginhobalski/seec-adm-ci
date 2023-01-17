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


    public function recuperaAulasDaDisciplina(int $disciplina_id, int $paginacao)
    {

        $atributos = [
            'aulas.id AS principal_id',
            'disciplinas.id AS id_disciplina',
            'aulas.disciplina_id AS disciplina_id',
            'disciplinas.nome AS disciplina_nome',
            'disciplinas.descricao AS disciplina_descricao',
            'aulas.titulo AS titulo',
            'aulas.descricao AS descricao',
            'aulas.recurso AS recurso',
        ];

        return $this->select($atributos)
            ->join('disciplinas', 'disciplinas.id = aulas.disciplina_id')
            ->paginate($paginacao);
    }
}

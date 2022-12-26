<?php

namespace App\Models;

use CodeIgniter\Model;

class CursoDisciplinaModel extends Model
{
    protected $table            = 'curso_disciplinas';
    protected $returnType       = 'object';
    protected $allowedFields    = ['curso_id', 'disciplina_id'];


    public function recuperaDisciplinasDoCurso(int $curso_id, int $paginacao)
    {

        $atributos = [
            'curso_disciplinas.id AS principal_id',
            'cursos.id AS curso_id',
            'cursos.nome AS curso_nome',
            'cursos.valor AS curso_valor',
            'cursos.descricao AS curso_descricao',
            'cursos.categoria AS curso_categoria',
            'disciplinas.id AS disciplina_id',
            'disciplinas.nome AS disciplina_nome',
            'disciplinas.descricao AS disciplina_descricao',
        ];

        return $this->select($atributos)
            ->join('cursos', 'cursos.id = curso_disciplinas.curso_id')
            ->join('disciplinas', 'disciplinas.id = curso_disciplinas.disciplina_id')
            ->where('curso_disciplinas.curso_id', $curso_id)
            ->groupBy('disciplinas.nome')
            ->paginate($paginacao);
    }
}

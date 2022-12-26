<?php

namespace App\Models;

use CodeIgniter\Model;

class AulaDisciplinaModel extends Model
{
    protected $table            = 'aulas_disciplinas';
    protected $returnType       = 'object';
    protected $allowedFields    = ['disciplina_id', 'aula_id'];


    public function recuperaAulasDaDisciplina(int $disciplina_id, int $paginacao)
    {

        $atributos = [
            'aulas_disciplinas.id AS principal_id',
            'cursos.id AS curso_id',
            'cursos.nome AS curso_nome',
            'cursos.valor AS curso_valor',
            'cursos.descricao AS curso_descricao',
            'cursos.categoria AS curso_categoria',
            'disciplinas.id AS disciplina_id',
            'disciplinas.nome AS disciplina_nome',
            'disciplinas.descricao AS disciplina_descricao',
            'aulas.titulo AS aula_titulo',
            'aulas.descricao AS aula_descricao',
            'aulas.recurso AS aula_recurso',
        ];

        return $this->select($atributos)
            ->join('cursos', 'cursos.id = curso_disciplinas.disciplina_id')
            ->join('disciplinas', 'disciplinas.id = aulas_disciplinas.disciplina_id')
            ->where('curso_disciplinas.curso_id', $disciplina_id)
            ->groupBy('disciplinas.nome')
            ->paginate($paginacao);
    }
}

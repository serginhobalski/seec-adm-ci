<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunoCursoModel extends Model
{
    protected $table            = 'alunos_cursos';
    protected $returnType       = 'object';
    protected $allowedFields    = ['curso_id', 'aluno_id'];

    public function recuperaAlunosDoCurso(int $curso_id, int $quantidade_paginacao)
    {


        $atributos = [
            'alunos_cursos.id AS principal_id',
            'cursos.id AS curso_id',
            'usuarios.id AS alunos_id',
            'usuarios.nome',
        ];

        return $this->select($atributos)
            ->join('cursos', 'cursos.id = alunos_cursos.curso_id')
            ->join('usuarios', 'usuarios.id = alunos_cursos.alunos_id')
            ->where('alunos_cursos.curso_id', $curso_id)
            ->groupBy('usuarios.nome')
            ->paginate($quantidade_paginacao);
    }
}

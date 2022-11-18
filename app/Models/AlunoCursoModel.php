<?php

namespace App\Models;

use CodeIgniter\Model;

class AlunoCursoModel extends Model
{
    protected $table            = 'alunos_cursos';
    protected $returnType       = 'object';
    protected $allowedFields    = ['curso_id', 'aluno_id'];
}

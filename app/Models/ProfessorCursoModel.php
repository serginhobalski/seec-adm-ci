<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfessorCursoModel extends Model
{
    protected $table            = 'professores_cursos';
    protected $returnType       = 'object';
    protected $allowedFields    = ['curso_id', 'professor_id'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModuloCursoModel extends Model
{
    protected $table            = 'modulos_cursos';
    protected $returnType       = 'object';
    protected $allowedFields    = ['modulo', 'curso_id'];
}

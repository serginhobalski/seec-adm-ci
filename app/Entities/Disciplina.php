<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Disciplina extends Entity
{
    protected $dates   = [
        'criado_em',
        'alterado_em',
        'deletado_em',
    ];
}

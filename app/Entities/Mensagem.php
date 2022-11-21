<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Mensagem extends Entity
{
    protected $dates   = [
        'criado_em',
        'alterado_em',
        'deletado_em',
    ];
}

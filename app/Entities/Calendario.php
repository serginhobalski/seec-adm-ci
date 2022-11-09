<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Calendario extends Entity
{
    protected $datamap = [];
    protected $dates   = ['criado_em', 'alterado_em', 'deletado_em'];
    protected $casts   = [];
}

<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Curso extends Entity
{
    protected $dates   = [
        'criado_em',
        'alterado_em',
        'deletado_em',
    ];

    public function exibeSituacao()
    {
        if ($this->deletado_em != null) {

            // Curso excluído

            $icone = '<span class="text-white"><b>Excluído</b></span>&nbsp;<i class="fa fa-undo"></i>&nbsp;Restaurar';

            $situacao = anchor("cursos/desfazerexclusao/$this->id", $icone, ['class' => 'btn btn-sm']);

            return $situacao;
        }

        if ($this->ativo == true) {

            return '<i class="fa fa-eye fa-lg text-success"></i>&nbsp;Curso Ativo';
        }


        if ($this->ativo == false) {

            return '<i class="fa fa-eye-slash fa-lg text-danger"></i>&nbsp;Curso Inativo ';
        }
    }
}

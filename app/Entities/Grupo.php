<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Grupo extends Entity
{

    protected $dates   = [
        'criado_em',
        'alterado_em',
        'deletado_em',
    ];

    public function exibeSituacao()
    {
        if ($this->deletado_em != null) {

            // Grupo excluído

            $icone = '<span class="text-white"><b>Excluído</b></span>&nbsp;<i class="fa fa-undo"></i>&nbsp;Restaurar';

            $situacao = anchor("grupos/desfazerexclusao/$this->id", $icone, ['class' => 'btn btn-outline-succes btn-sm']);

            return $situacao;
        }

        if ($this->exibir == true) {

            return '<i class="fa fa-eye fa-lg text-success"></i>&nbsp;Exibir grupo';
        }


        if ($this->exibir == false) {

            return '<i class="fa fa-eye-slash fa-lg text-danger"></i>&nbsp;Não exibir grupo ';
        }
    }
}

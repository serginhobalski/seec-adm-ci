<?php

namespace App\Models;

use CodeIgniter\Model;

class MensagemModel extends Model
{
    protected $table            = 'mensagens';
    protected $returnType       = 'App\Entities\Mensagem';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'destinatario',
        'assunto',
        'mensagem',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    // protected $validationRules      = [
    //     'assunto' => 'required',
    //     'mensagem' => 'required',
    // ];
    // protected $validationMessages   = [
    //     'assunto ' => [
    //         'required' => '<b class="text-danger">Informe o assunto da mensagem.</b>',
    //     ],
    //     'mensagem ' => [
    //         'required' => '<b class="text-danger">Preencha o campo de mensagem.</b>',
    //     ],
    // ];
}

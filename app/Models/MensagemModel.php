<?php

namespace App\Models;

use CodeIgniter\Model;

class MensagemModel extends Model
{
    protected $table            = 'mensagens';
    protected $returnType       = 'App\Entities\Mensagem';
    protected $useSoftDeletes   = true;
    protected $allowedFields    = [
        'remetente_id',
        'destinatario_id',
        'assunto',
        'mensagem',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    public function recuperaMensagensEnviadas(int $usuario_id, $quantidade_paginacao)
    {

        $atributos = [
            'usuarios.id',
            'usuarios.nome',
            'mensagens.remetente_id AS remetente_id',
            'mensagens.assunto',
            'mensagens.mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
        ];

        return $this->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.remetente_id')
            ->where('mensagens.remetente_id', $usuario_id)
            ->groupBy('usuarios.nome')
            ->paginate($quantidade_paginacao);
    }

    public function recuperaMensagensRecebidas(int $usuario_id, $quantidade_paginacao)
    {

        $atributos = [
            'usuarios.id',
            'usuarios.nome',
            'mensagens.destinatario_id AS destinatario_id',
            'mensagens.assunto',
            'mensagens.mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
        ];

        return $this->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.destinatario_id')
            ->where('mensagens.destinatario_id', $usuario_id)
            ->groupBy('usuarios.nome')
            ->paginate($quantidade_paginacao);
    }
}

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

    public function recuperaMensagensEnviadas(int $mensagem_id)
    {

        $atributos = [
            'mensagens.id AS mensagem_id',
            'mensagens.remetente_id AS remetente_id',
            'mensagens.destinatario_id AS destinatario_id',
            'mensagens.assunto AS assunto',
            'mensagens.mensagem AS mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
            'usuarios.nome AS usuario',
            'usuarios.local AS local',
            'usuarios.email AS email',
            'usuarios.imagem AS imagem',
        ];

        return $this->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.destinatario_id')
            ->where('mensagens.id', $mensagem_id)
            ->where('mensagens.remetente_id', usuario_logado()->id)
            ->findAll();
    }

    public function recuperaMensagensRecebidas(int $mensagem_id)
    {

        $atributos = [
            'mensagens.id AS mensagem_id',
            'mensagens.remetente_id AS remetente_id',
            'mensagens.destinatario_id AS destinatario_id',
            'mensagens.assunto AS assunto',
            'mensagens.mensagem AS mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
            'usuarios.nome AS usuario',
            'usuarios.local AS local',
            'usuarios.email AS email',
            'usuarios.imagem AS imagem',
        ];

        return $this->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.remetente_id')
            ->where('mensagens.id', $mensagem_id)
            ->where('mensagens.destinatario_id', usuario_logado()->id)
            ->findAll();
    }

    public function recuperaMensagensDeletadas()
    {

        $atributos = [
            'mensagens.id AS mensagem_id',
            'mensagens.remetente_id AS remetente_id',
            'mensagens.destinatario_id AS destinatario_id',
            'mensagens.assunto AS assunto',
            'mensagens.mensagem AS mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
            'usuarios.nome AS usuario',
            'usuarios.local AS local',
            'usuarios.email AS email',
            'usuarios.imagem AS imagem',
        ];

        return $this->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.remetente_id')
            ->where('mensagens.remetente_id', usuario_logado()->id)
            ->where('mensagens.destinatario_id', usuario_logado()->id)
            ->where('mensagens.deletado_em', !null)
            ->findAll();
    }
}

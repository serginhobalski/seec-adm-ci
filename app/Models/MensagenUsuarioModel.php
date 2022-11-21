<?php

namespace App\Models;

use CodeIgniter\Model;

class MensagenUsuarioModel extends Model
{
    protected $table            = 'mensagens_usuarios';
    protected $returnType       = 'object';
    protected $allowedFields    = ['mensagem_id', 'usuario_id'];

    // public function recuperaMensagensDoUsuario(int $usuario_id, int $quantidade_paginacao)
    public function recuperaMensagensDoUsuario(int $usuario_id, $quantidade_paginacao)
    {

        $atributos = [
            'mensagens_usuarios.id AS principal_id',
            'mensagens.id AS mensagem_id',
            'mensagens.destinatario AS destinatario',
            'mensagens.assunto AS assunto',
            'mensagens.mensagem AS mensagem',
            'mensagens.criado_em AS criado_em',
            'mensagens.deletado_em AS deletado_em',
        ];

        return $this->select($atributos)
            ->join('mensagens', 'mensagens.id = mensagens_usuarios.mensagem_id')
            ->join('usuarios', 'usuarios.id = mensagens_usuarios.usuario_id')
            ->where('mensagens_usuarios.usuario_id', $usuario_id)
            ->groupBy('mensagens.destinatario')
            ->paginate($quantidade_paginacao);
    }

    public function recuperaMensagens()
    {

        $atributos = [
            'mensagens_usuarios.usuario_id',
            'mensagens.id AS mensagem_id',
            'mensagens.destinatario',
        ];

        return $this->select($atributos)
            ->asArray()
            ->join('mensagens', 'mensagens.id = mensagens_usuarios.mensagem_id')
            ->join('usuarios', 'usuarios.id = mensagens_usuarios.usuario_id')
            ->where('mensagens.deletado_em', null)
            ->findAll();
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mensagens extends BaseController
{
    private $mensagemModel;

    public function __construct()
    {
        $this->mensagemModel = new \App\Models\MensagemModel();
    }

    public function index()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
        ];

        return view('Mensagens/index', $data);
    }

    public function recuperaMensagens()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'mensagens.id',
            'mensagens.remetente_id',
            'mensagens.destinatario_id',
            'mensagens.assunto',
            'mensagens.mensagem',
            'mensagens.criado_em',
            'mensagens.deletado_em',
            'usuarios.nome AS nome'
        ];

        $mensagens = $this->mensagemModel->select($atributos)
            ->withDeleted(true)
            ->join('usuarios', 'usuarios.id = mensagens.remetente_id')
            ->join('usuarios', 'usuarios.id = mensagens.destinatario_id')
            ->where('remetente_id', usuario_logado()->id)
            ->where('destinatario_id', usuario_logado()->id)
            ->groupBy('usuarios.nome')
            ->orderBy('criado_em', 'DESC')
            ->findAll();

        $data = [];

        foreach ($mensagens as $mensagem) {

            $data[] = [
                'id' =>  $mensagem->id,
                'nome' => anchor("mensagens/exibir/$mensagem->id", esc($mensagem->nome), 'title="Exibir curso ' . esc($mensagem->nome) . '"'),
                'valor' => 'R$ ' . implode(",", explode(".", $mensagem->valor)),
                'categoria' => strtoupper($mensagem->categoria),
                'ativo' => $mensagem->exibeSituacao(),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }
}

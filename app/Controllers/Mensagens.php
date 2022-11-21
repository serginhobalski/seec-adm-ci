<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mensagens extends BaseController
{
    private $mensagemModel;
    private $mensagemUsuarioModel;


    public function __construct()
    {
        $this->mensagemModel = new \App\Models\MensagemModel();
        $this->mensagemUsuarioModel = new \App\Models\MensagenUsuarioModel();
    }

    public function index()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $mensagens = $this->mensagemUsuarioModel->recuperaMensagensDoUsuario(usuario_logado()->id, 10);

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'mensagens' => $mensagens,
        ];

        return view('Mensagens/index', $data);
    }

    public function recuperaMensagens(int $id = null)
    {
        // if (!$this->request->isAJAX()) {

        //     return redirect()->back();
        // }

        $mensagens = $this->mensagemUsuarioModel->recuperaMensagensDoUsuario(usuario_logado()->id, 10);

        dd($mensagens);


        // $data = [
        //     'titulo' => 'Mensagens de ' . usuario_logado()->nome,
        //     'mensagens' => $mensagens,
        // ];


        // return $this->response->setJSON($data);
    }



    private function buscaMensagemOu404(int $id = null)
    {
        if (!$id || !$mensagem = $this->mensagemModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos esta mensagem");
        }

        return $mensagem;
    }
}

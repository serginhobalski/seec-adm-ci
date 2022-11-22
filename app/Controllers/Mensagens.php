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

        $mensagensEnviadas = $this->mensagemModel
            ->recuperaMensagensEnviadas(usuario_logado()->id, 10);

        $mensagensRecebidas = $this->mensagemModel
            ->recuperaMensagensRecebidas(usuario_logado()->id, 10);

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'mensagensEnviadas' => $mensagensEnviadas,
            'mensagensRecebidas' => $mensagensRecebidas,
        ];

        return view('Mensagens/index', $data);
    }

    public function recuperaMensagens(int $id = null)
    {
        // if (!$this->request->isAJAX()) {

        //     return redirect()->back();
        // }

        $mensagens = $this->mensagemModel->recuperaMensagensRecebidas(usuario_logado()->id, 10);

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

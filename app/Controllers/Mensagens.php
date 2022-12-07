<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Mensagem;

class Mensagens extends BaseController
{
    private $mensagemModel;
    private $usuarioModel;


    public function __construct()
    {
        $this->mensagemModel = new \App\Models\MensagemModel();
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();

        $atributos = [
            'mensagens.id AS mensagem_id',
            'mensagens.remetente_id AS remetente_id',
            'mensagens.destinatario_id AS destinatario_id',
            'mensagens.assunto AS assunto',
            'mensagens.mensagem AS mensagem',
            'mensagens.criado_em AS criado_em',
            'usuarios.nome AS usuario',
            'usuarios.local AS local',
            'usuarios.email AS email',
        ];

        $mensagens = $this->mensagemModel->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.remetente_id')
            ->where('destinatario_id', usuario_logado()->id)
            ->findAll();

        // dd($mensagens);
        // exit;

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'subtitulo' => 'entrada',
            'mensagens' => $mensagens,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/index', $data);
    }

    public function enviadas()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();

        $atributos = [
            'mensagens.id AS principal_id',
            'mensagens.remetente_id AS remetente',
            'mensagens.destinatario_id AS destinatario',
            'mensagens.assunto',
            'mensagens.mensagem',
            'mensagens.criado_em',
            'usuarios.nome AS destinatario',
            'usuarios.email AS email',
        ];

        $mensagens = $this->mensagemModel->select($atributos)
            ->join('usuarios', 'usuarios.id = mensagens.destinatario_id')
            ->where('remetente_id', usuario_logado()->id)
            ->findAll();

        // dd($mensagens);
        // exit;

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'subtitulo' => 'enviadas',
            'mensagens' => $mensagens,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/enviadas', $data);
    }


    public function lixeira()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')
            ->withDeleted(true)
            ->where('mensagens.deletado_em', !null)
            ->where('mensagens.remetente_id', usuario_logado()->id)
            ->where('mensagens.destinatario_id', usuario_logado()->id)
            ->countAllResults();


        $mensagens = $this->mensagemModel->recuperaMensagensDeletadas();

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'subtitulo' => 'lixeira',
            'mensagens' => $mensagens,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/lixeira', $data);
    }


    public function exibir(int $id = null)
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();

        $mensagem = $this->buscaMensagemOu404($id);


        $data = [
            'titulo' => "Detalhe Mensagem",
            'subtitulo' => "detalhe",
            'mensagem' => $mensagem,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/exibir', $data);
    }


    public function exibirEnviada(int $id = null)
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();


        $mensagem = $this->buscaMensagemOu404($id);
        $mensagem = $this->mensagemModel->recuperaMensagensEnviadas($id);


        // dd($mensagem);
        // exit;


        $data = [
            'titulo' => "Detalhe Mensagem",
            'subtitulo' => "detalhe",
            'mensagem' => $mensagem,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/exibir_enviada', $data);
    }

    public function exibirRecebida(int $id = null)
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();


        $mensagem = $this->buscaMensagemOu404($id);
        $mensagem = $this->mensagemModel->recuperaMensagensRecebidas($id);


        // dd($mensagem);
        // exit;


        $data = [
            'titulo' => "Detalhe Mensagem",
            'subtitulo' => "detalhe",
            'mensagem' => $mensagem,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/exibir_recebida', $data);
    }

    public function criar()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();

        $mensagem = new Mensagem();

        $destinatarios = $this->usuarioModel->select('id, nome')->findAll();

        $data = [
            'titulo' => 'Escrever Mensagem',
            'subtitulo' => 'escrever',
            'mensagem' => $mensagem,
            'destinatarios' => $destinatarios,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,

        ];
        return view('mensagens/criar', $data);
    }

    public function cadastrar()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Criar novo objeto da entidade Usuário
        $mensagem = new Mensagem($post);


        if ($this->mensagemModel->save($mensagem)) {

            session()->setFlashdata('sucesso', 'Mensagem enviada com sucesso!<br> <a href=' . site_url('mensagens/criar') . ' class="btn mt-2"><i class="fa fa-save"></i> Enviar outra mensagem</a>');

            $retorno['id'] = $this->mensagemModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->mensagemModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function excluir(int $id = null)
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Faça o login para acessar esta página.");
        }

        $nRecebidas = $this->mensagemModel->select('*')->where('destinatario_id', usuario_logado()->id)->countAllResults();
        $nEnviadas = $this->mensagemModel->select('*')->where('remetente_id', usuario_logado()->id)->countAllResults();
        $nDeletadas = $this->mensagemModel->select('*')->where('deletado_em' != null)->countAllResults();

        $mensagem = $this->buscaMensagemOu404($id);

        // Verificar se a mensagem já foi excluída anteriormente
        if ($mensagem->deletado_em != null) {
            return redirect()->back()->with('info', "Esta mensagem já encontra-se excluída.");
        }

        if ($this->request->getMethod() === 'post') {

            // Deletar mensagem
            $this->mensagemModel->delete($mensagem->id);

            $this->mensagemModel->protect(false)->save($mensagem);

            return redirect()->to(site_url("mensagens"))->with('sucesso', "Mensagem excluída com sucesso.");
        }

        $data = [
            'titulo' => "Excluindo mensagem ",
            'subtitulo' => "Excluiir",
            'mensagem' => $mensagem,
            'recebidas' => $nRecebidas,
            'enviadas' => $nEnviadas,
            'deletadas' => $nDeletadas,
        ];

        return view('Mensagens/excluir', $data);
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

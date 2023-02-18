<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Evento;

class Eventos extends BaseController
{
    private $eventoModel;
    private $usuarioModel;

    public function __construct()
    {
        $this->eventoModel = new \App\Models\EventoModel();
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function index()
    {
        if (!usuario_logado()->is_admin) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $eventos = $this->eventoModel->select('*')->findAll();

        $data = [
            'titulo' => 'Eventos SEEC Pará',
            'eventos' => $eventos,
        ];
        return view('Eventos/index', $data);
    }

    public function exibir(int $id = null)
    {
        $evento = $this->buscaEventoOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($evento->nome),
            'evento' => $evento,
        ];

        return view('Eventos/exibir', $data);
    }

    public function detalhes(int $id = null)
    {
        $evento = $this->buscaEventoOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($evento->nome),
            'evento' => $evento,
        ];

        return view('Eventos/detalhes', $data);
    }

    public function criar()
    {
        $evento = new Evento();

        $data = [
            'titulo' => 'Cadastro de evento',
            'evento' => $evento,
        ];
        return view('Eventos/criar', $data);
    }

    public function cadastrar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        // Envio o hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'imagem' => 'uploaded[imagem]|ext_in[imagem,png,jpg,jpeg,gif]',
        ];

        $mensagens = [   // Errors
            'imagem' => [
                'uploaded' => 'Por favor escolha umimagem imagem',
                'ext_in'   => 'Por favor escolha umimagem imagem png, jpg, jpeg, ou gif',
            ],
        ];

        $validacao->setRules($regras, $mensagens);

        if ($validacao->withRequest($this->request)->run() === false) {
            $retorno['erro'] = 'Por favor verifique os erros abaixo e tente novamente';
            $retorno['erros_model'] = $validacao->getErrors();

            // Retorno para o ajax request
            return $this->response->setJSON($retorno);
        }

        // Recupera o post da requisição
        $post = $this->request->getPost();

        // Criar nova instância da entidade relatório
        $evento = new Evento($post);


        // Recuperar os arquivos enviados no post
        $imagem = $this->request->getFile('imagem');

        $caminhoImagem = $imagem->store('eventos');


        $caminhoImagem = WRITEPATH . "uploads/$caminhoImagem";


        // Atualizar a tabela de eventos
        $evento->imagem = $imagem->getName();


        $this->eventoModel->save($evento);


        session()->setFlashdata('sucesso', 'Evento cadastrado com sucesso!');


        // Retorno para o ajax request
        return $this->response->setJSON($retorno);
    }

    public function uploadImagem(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'imagem' => 'uploaded[imagem]|ext_in[imagem,png,jpg,jpeg,gif]',
        ];

        $mensagens = [   // Errors
            'imagem' => [
                'uploaded' => '<b class="text-danger">Por favor anexar uma imagem.</b>',
                'ext_in' => '<b class="text-danger">Tipo de arquivo não suportado.<br> Use somente arquivo do tipo ".jpg", ".gif" ou ".png".</b>',
            ],
        ];

        $validacao->setRules($regras, $mensagens);

        if ($validacao->withRequest($this->request)->run() == false) {

            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = $validacao->getErrors();

            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do evento
        $evento = $this->buscaEventoOu404($post['id']);


        $imagem = $this->request->getFile('imagem');


        // list($largura, $altura) = getimagesize($comprovante->getPathName());


        $arquivoCaminho = $imagem->store('relatorios');

        $arquivoCaminho = WRITEPATH . "uploads/$arquivoCaminho";


        $comprovanteAntigo = $evento->imagem;

        $evento->imagem = $evento->getName();

        $this->eventoModel->save($evento);

        if ($comprovanteAntigo != null) {
            $this->removeComprovanteAntigo($comprovanteAntigo);
        }


        session()->setFlashdata('sucesso', 'Imagem enviada com sucesso!');


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function imagem(string $imagem = null)
    {

        if ($imagem != null) {
            $this->exibeArquivo('eventos', $imagem);
        }
    }


    private function buscaEventoOu404(int $id = null)
    {
        if (!$id || !$evento = $this->eventoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o evento $id");
        }

        return $evento;
    }

    private function removeComprovanteAntigo(string $imagem)
    {
        $arquivoCaminho = WRITEPATH . "uploads/eventos/$imagem";

        if (is_file($arquivoCaminho)) {
            unlink($arquivoCaminho);
        }
    }
}

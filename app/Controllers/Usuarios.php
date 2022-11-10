<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Entities\Usuario;
use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    private $usuarioModel;
    // private $grupoUsuarioModel;
    // private $grupoModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
        // $this->grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();
        // $this->grupoModel = new \App\Models\GrupoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Usuários',
        ];
        return view('Usuarios/index', $data);
    }

    public function recuperaUsuarios()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'id',
            'nome',
            'local',
            'login',
            'admin',
            'imagem',
        ];


        $usuarios = $this->usuarioModel->select($atributos)
            ->findAll();

        $data = [];

        foreach ($usuarios as $usuario) {

            $nomeUsuario = esc($usuario->nome);

            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => anchor("usuarios/exibir/$usuario->id", esc($usuario->nome), 'title="Exibir ' . $nomeUsuario . '"'),
                'local' => esc($usuario->local),
                'login' => esc($usuario->login),
                'admin' => ($usuario->admin == true ? '<span class="text-success">Admin Geral </span>' : '<span class="text-warning">UETP </span>'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        // echo '<pre>';
        // print_r($retorno);
        // exit;

        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/exibir', $data);
    }

    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
        }

        return $usuario;
    }

    public function editar(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Editando " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/editar', $data);
    }

    public function atualizar(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do usuário
        $usuario = $this->buscaUsuarioOu404($post['id']);

        // Remover o campo 'password' se o campo não foi preenchido
        if (empty($post['password'])) {

            unset($post['password']);
            unset($post['password_confirmation']);
        }

        // preencher os atributos do usuários com os valores do POST
        $usuario->fill($post);

        if ($usuario->hasChanged() == false) {
            $retorno['info'] = 'Não existem dados para serem atualizados.';
            return $this->response->setJSON($retorno);
        }

        if ($this->usuarioModel->protect(false)->save($usuario)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function editarImagem(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Alterando imagem de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/editar_imagem', $data);
    }

    public function upload(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'imagem' => 'uploaded[imagem]|max_size[imagem,1024]|ext_in[imagem,png,jpg,jpeg,gif]',
        ];

        $mensagens = [   // Errors
            'imagem' => [
                'uploaded' => 'Por favor selecione uma imagem.',
                'max_size' => 'Por favor selecione uma de no máximo 1MB.',
                'ext_info' => 'Tipo de arquivo não suportado.',
            ],
        ];


        $validacao->setRules($regras, $mensagens);


        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do usuário
        $usuario = $this->buscaUsuarioOu404($post['id']);

        // Remover o campo 'password' se o campo não foi preenchido
        if (empty($post['password'])) {

            unset($post['password']);
            unset($post['password_confirmation']);
        }

        // preencher os atributos do usuários com os valores do POST
        $usuario->fill($post);

        if ($usuario->hasChanged() == false) {
            $retorno['info'] = 'Não existem dados para serem atualizados.';
            return $this->response->setJSON($retorno);
        }

        if ($this->usuarioModel->protect(false)->save($usuario)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function criar()
    {
        $usuario = new Usuario();

        $data = [
            'titulo' => 'Cadastro de usuário',
            'usuario' => $usuario,
        ];
        return view('Usuarios/criar', $data);
    }

    public function cadastrar(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Criar novo objeto da entidade Usuário
        $usuario = new Usuario($post);


        if ($this->usuarioModel->protect(false)->save($usuario)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!<br> <a href=' . site_url('usuarios/criar') . ' class="btn mt-2"><i class="fa fa-save"></i> Cadastrar outro usuário</a>');

            $retorno['id'] = $this->usuarioModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }
}

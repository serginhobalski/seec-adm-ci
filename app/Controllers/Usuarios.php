<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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

        $retorno['token'] = csrf_hash();

        $post = $this->request->getPost();

        $usuario = $this->buscaUsuarioOu404($post['id']);

        $usuario->fill($post);

        return $this->response->setJSON($retorno);
    }
}

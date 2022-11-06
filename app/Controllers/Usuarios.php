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

    public function usuarios()
    {
        $data = [
            'titulo' => 'Usuários',
        ];
        return view('Adm/usuarios', $data);
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

            $data[] = [
                'imagem' => $usuario->imagem,
                'nome' => esc($usuario->nome),
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
}

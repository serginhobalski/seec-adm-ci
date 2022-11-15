<?php

namespace App\Controllers;

use App\Libraries\Autenticacao;

class Adm extends BaseController
{
    public function index()
    {
        // dd(usuario_logado());

        $data = [
            'titulo' => 'Painel',
        ];
        return view('Adm/index', $data);
    }

    public function uetp()
    {
        $data = [
            'titulo' => 'UETP ' . usuario_logado()->nome . '!',
        ];
        return view('Adm/uetp', $data);
    }

    public function secretaria()
    {
        $data = [
            'titulo' => 'Área de' . usuario_logado()->nome . '!',
        ];
        return view('Adm/secretaria', $data);
    }

    public function login()
    {
        $autenticacao = service('autenticacao');

        // $autenticacao->login('teste', 'teste123456');

        $usuario = $autenticacao->pegaUsuarioLogado();

        // dd($autenticacao->login('admin', 'admin123456'));
        // dd($usuario);
        // $autenticacao->logout();
        // return redirect()->to(site_url('adm'));
    }

    public function cursos()
    {
        $data = [
            'titulo' => 'Cursos',
        ];
        return view('Adm/cursos', $data);
    }

    public function mensagens()
    {
        $data = [
            'titulo' => 'Mensagens',
        ];
        return view('Adm/mensagens', $data);
    }

    public function calendario()
    {
        $data = [
            'titulo' => 'Calendário',
        ];
        return view('Adm/calendario', $data);
    }

    public function perfil()
    {
        $data = [
            'titulo' => 'Perfil',
        ];
        return view('Adm/perfil', $data);
    }
}

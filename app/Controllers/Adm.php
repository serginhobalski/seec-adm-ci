<?php

namespace App\Controllers;

use App\Libraries\Autenticacao;

class Adm extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Painel',
        ];
        return view('Adm/index', $data);
    }

    public function login()
    {
        $autenticacao = new Autenticacao();

        dd($autenticacao->login('admin', 'serele21'));
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

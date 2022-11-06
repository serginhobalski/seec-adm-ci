<?php

namespace App\Controllers;

class Adm extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Painel',
        ];
        return view('Adm/index', $data);
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

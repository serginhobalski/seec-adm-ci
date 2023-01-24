<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
}

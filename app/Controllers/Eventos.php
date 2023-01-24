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

    public function exibir(int $id = null)
    {
        $evento = $this->buscaEventoOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($evento->nome),
            'evento' => $evento,
        ];

        return view('Eventos/exibir', $data);
    }


    private function buscaEventoOu404(int $id = null)
    {
        if (!$id || !$evento = $this->eventoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o evento $id");
        }

        return $evento;
    }
}

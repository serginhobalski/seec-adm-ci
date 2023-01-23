<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Eventos extends BaseController
{
    public function index()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }


        $data = [
            'titulo' => 'Eventos SEEC Pará',
        ];
        return view('Eventos/index', $data);
    }
}

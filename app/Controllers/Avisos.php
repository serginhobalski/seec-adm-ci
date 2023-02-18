<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Avisos extends BaseController
{
    private $avisoModel;

    public function __construct()
    {
        $this->avisoModel = new \App\Models\AvisoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Painel de Avisos',         
        ];

        return view('Avisos/index', $data);
    }
}

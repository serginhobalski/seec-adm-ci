<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Grupos extends BaseController
{
    private $grupoModel;

    public function __construct()
    {
        $this->grupoModel = new \App\Models\GrupoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Grupos de Acesso',
        ];
        return view('Grupos/index', $data);
    }

    public function recuperaGrupos()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'id',
            'nome',
            'descricao',
        ];


        $grupos = $this->grupoModel->select($atributos)
            ->findAll();

        $data = [];

        foreach ($grupos as $grupo) {

            $data[] = [
                'nome' => esc($grupo->nome),
                'descricao' => esc($grupo->descricao),
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

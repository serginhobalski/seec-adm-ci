<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Relatorios extends BaseController
{
    private $relatorioModel;

    public function __construct()
    {
        $this->relatorioModel = new \App\Models\RelatorioModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Relatórios',
        ];
        return view('Relatorios/index', $data);
    }

    public function recuperaRelatorios()
    {
        // if (!$this->request->isAJAX()) {

        //     return redirect()->back();
        // }

        $atributos = [
            'id',
            'nome',
            'local',
            'mes',
            'ano',
            'valor',
        ];

        $relatorios = $this->relatorioModel->select($atributos)
            ->findAll();

        $data = [];

        foreach ($relatorios as $relatorio) {

            $data[] = [
                'id' => $relatorio->id,
                'nome' => esc($relatorio->nome),
                'local' => esc($relatorio->local),
                'mes' => esc($relatorio->mes),
                'ano' => esc($relatorio->ano),
                'valor' => implode(',', explode('.', $relatorio->valor)),
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

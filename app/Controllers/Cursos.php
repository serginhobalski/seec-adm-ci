<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cursos extends BaseController
{
    private $cursoModel;

    public function __construct()
    {
        $cursoModel = new \App\Models\CursoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Cursos',
        ];
        return view('Cursos/index', $data);
    }

    public function recuperaCursos()
    {
        // if (!$this->request->isAJAX()) {

        //     return redirect()->back();
        // }

        $atributos = [
            'id',
            'nome',
            'descricao',
            'valor',
            'ativo',
            'imagem',
            'deletado_em',
        ];


        $cursos = $this->cursoModel->select($atributos)
            ->findAll();

        $data = [];

        foreach ($cursos as $curso) {

            $data[] = [
                'id' => $curso->id,
                'nome' => esc($curso->nome),
                // 'nome' => anchor("cursos/exibir/$curso->id", esc($curso->nome), 'title="Exibir ' . esc($curso->nome) . '"'),
                'ativo' => ($curso->ativo === true ? '<b>Ativo</b>' : '<b>Inativo</b>'),
            ];
        }

        dd($data);
        exit;


        $retorno = [
            'data' => $data,
        ];

        // echo '<pre>';
        // print_r($retorno);
        // exit;

        return $this->response->setJSON($retorno);
    }
}

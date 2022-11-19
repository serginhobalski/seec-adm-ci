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
        $atributos = [
            'id',
            'nome',
            'descricao',
            'ativo',
        ];

        $data = [
            'titulo' => 'Cursos',
        ];
        return view('Cursos/index', $data);
    }

    public function recuperaCursos()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'id',
            'nome',
            'descricao',
            'ativo',
        ];

        $cursos = $this->cursoModel->select($atributos)
            ->withDeleted(true)
            ->orderBy('id', 'DESC')
            ->findAll();

        $data = [];

        foreach ($cursos as $curso) {

            $data[] = [
                'id' =>  $curso->id,
                'nome' => anchor("cursos/exibir/$curso->id", esc($curso->nome), 'title="Exibir curso ' . esc($curso->nome) . '"'),
                'descricao' => esc($curso->descricao),
                'ativo' => $curso->exibeSituacao(),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }
}

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

    public function meusRelatorios()
    {
        $data = [
            'titulo' => 'Relatórios',
        ];
        return view('Relatorios/meus_relatorios', $data);
    }


    public function recuperaRelatorios()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

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

            $nomeRelatorio = esc($relatorio->nome);

            $data[] = [
                'id' => $relatorio->id,
                'nome' => anchor("relatorios/exibir/$relatorio->id", esc($relatorio->nome), 'title="Exibir ' . $nomeRelatorio . '"'),
                'local' => esc($relatorio->local),
                'mes' => esc($relatorio->mes),
                'ano' => esc($relatorio->ano),
                'valor' => ($relatorio->valor > 0 ? 'R$ ' . implode(',', explode('.', $relatorio->valor)) : '*Sem movimento'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $relatorio = $this->buscaRelatorioOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($relatorio->nome),
            'usuario' => $relatorio,
        ];

        return view('Relatorios/exibir', $data);
    }

    private function buscaRelatorioOu404(int $id = null)
    {
        if (!$id || !$relatorio = $this->relatorioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o relatório $id");
        }

        return $relatorio;
    }

    public function editar(int $id = null)
    {
        $relatorio = $this->buscaRelatorioOu404($id);

        $data = [
            'titulo' => "Editando relatório de " . esc($relatorio->nome) . " de " . $relatorio->mes . " de " . $relatorio->ano,
            'relatorio' => $relatorio,
        ];

        return view('Relatorios/editar', $data);
    }

    public function atualizar(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $retorno['token'] = csrf_hash();

        $post = $this->request->getPost();

        $relatorio = $this->buscaRelatorioOu404($post['id']);

        $relatorio->fill($post);

        return $this->response->setJSON($retorno);
    }
}

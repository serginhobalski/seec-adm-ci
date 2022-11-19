<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Relatorio;

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

    public function recuperaMeusRelatorios()
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
            ->where('nome', usuario_logado()->nome)
            ->orderBy('criado_em', 'DESC')
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
            'titulo' => "Detalhes do relatório",
            'relatorio' => $relatorio,
        ];

        return view('Relatorios/exibir', $data);
    }

    public function criar()
    {
        $relatorio = new Relatorio();

        $atributos = [
            'id',
            'nome',
            'local',
            'mes',
            'ano',
            'valor',
        ];

        $opcoes = $this->relatorioModel->select($atributos)
            ->findAll();

        $data = [
            'titulo' => 'Cadastro de relatório',
            'relatorio' => $relatorio,
            'opcoes' => $opcoes,

        ];
        return view('relatorios/criar', $data);
    }

    public function uploadComprovante(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'comprovante' => 'uploaded[comprovante]|ext_in[comprovante,pdf,png,jpg,jpeg,gif]',
        ];

        $mensagens = [   // Errors
            'comprovante' => [
                'uploaded' => '<b class="text-danger">Por favor anexar o comprovante.</b>',
                'ext_in' => '<b class="text-danger">Tipo de arquivo não suportado.<br> Use somente arquivo do tipo ".pdf", ".jpg", ".gif" ou ".png".</b>',
            ],
        ];

        $validacao->setRules($regras, $mensagens);

        if ($validacao->withRequest($this->request)->run() == false) {

            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = $validacao->getErrors();

            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do usuário
        $relatorio = $this->buscaRelatorioOu404($post['id']);


        $comprovante = $this->request->getFile('comprovante');


        // list($largura, $altura) = getimagesize($comprovante->getPathName());


        $arquivoCaminho = $comprovante->store('relatorios');

        $arquivoCaminho = WRITEPATH . "uploads/$arquivoCaminho";


        $comprovanteAntigo = $relatorio->comprovante;

        $relatorio->comprovante = $comprovante->getName();

        $this->relatorioModel->save($relatorio);

        if ($comprovanteAntigo != null) {
            $this->removeComprovanteAntigo($comprovanteAntigo);
        }


        session()->setFlashdata('sucesso', 'Comprovante enviado com sucesso!');


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
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

    public function excluir(int $id = null)
    {
        $relatorio = $this->buscaRelatorioOu404($id);

        // Verificar se o relatório já foi excluído anteriormente
        if ($relatorio->deletado_em != null) {
            return redirect()->back()->with('info', "Este relatório já encontra-se excluído.");
        }

        if ($this->request->getMethod() === 'post') {

            // Deletar usuário
            $this->relatorioModel->delete($relatorio->id);

            // Remove arquivos do relatorio
            /**
             * @todo Criar função para remover os arquivos...
             */


            $this->relatorioModel->protect(false)->save($relatorio);


            return redirect()->to(site_url("relatorios"))->with('sucesso', "Relatório de  $relatorio->nome excluído com sucesso.");
        }

        $data = [
            'titulo' => "Excluindo relatório " . esc($relatorio->nome),
            'relatorio' => $relatorio,
        ];

        return view('Relatorios/excluir', $data);
    }

    public function cadastrar(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Criar novo objeto da entidade Relatório
        $relatorio = new Relatorio($post);


        if ($this->relatorioModel->protect(false)->save($relatorio)) {
            $btnCriar = anchor("relatorios/criar", 'Cadastrar outro relatório', ['class' => 'btn mt-2']);

            session()->setFlashdata('sucesso', "Dados salvos com sucesso! $btnCriar");

            $retorno['id'] = $this->relatorioModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->relatorioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    private function removeComprovanteAntigo(string $comprovante)
    {
        $arquivoCaminho = WRITEPATH . "uploads/relatorios/$comprovante";

        if (is_file($arquivoCaminho)) {
            unlink($arquivoCaminho);
        }
    }
}

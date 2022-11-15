<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Grupo;

class Grupos extends BaseController
{
    private $grupoModel;
    private $grupoPermissaoModel;
    private $permissaoModel;


    public function __construct()
    {
        $this->grupoModel = new \App\Models\GrupoModel();
        $this->grupoPermissaoModel = new \App\Models\GrupoPermissaoModel();
        $this->permissaoModel = new \App\Models\PermissaoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Grupos de acesso ao sistema',
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
            'exibir',
            'deletado_em',
        ];


        $grupos = $this->grupoModel->select($atributos)
            ->withDeleted(true)
            ->orderBy('id', 'DESC')
            ->findAll();

        $data = [];

        foreach ($grupos as $grupo) {

            $data[] = [
                'id' =>  $grupo->id,
                'nome' => anchor("grupos/exibir/$grupo->id", esc($grupo->nome), 'title="Exibir Grupo ' . esc($grupo->nome) . '"'),
                'descricao' => esc($grupo->descricao),
                'exibir' => $grupo->exibeSituacao(),
                // 'exibir' => ($grupo->exibir == 1 ? '<i class="fa fa-eye text-success" title="Grupo disponível"></i> Disponível' : '<i class="fa fa-eye-slash text-danger" title="Grupo oculto"></i> Oculto'),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }

    public function criar(int $id = null)
    {
        $grupo = new Grupo();

        $data = [
            'titulo' => "Criando novo grupo",
            'grupo' => $grupo,
        ];

        return view('Grupos/criar', $data);
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

        // Criar novo objeto da entidade Usuário
        $grupo = new Grupo($post);


        if ($this->grupoModel->save($grupo)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!<br> <a href=' . site_url('grupos/criar') . ' class="btn mt-2"><i class="fa fa-save"></i> Cadastrar outro grupo</a>');

            $retorno['id'] = $this->grupoModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->grupoModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $grupo = $this->buscaGrupoOu404($id);

        $data = [
            'titulo' => "Detalhes do grupo " . esc($grupo->nome),
            'grupo' => $grupo,
        ];

        return view('Grupos/exibir', $data);
    }

    public function editar(int $id = null)
    {

        $grupo = $this->buscaGrupoOu404($id);

        if ($grupo->id == 1) {
            return redirect()
                ->back()
                ->with('atencao', 'O grupo Administrador não pode ser alterado nem excluído!');
        }

        $data = [
            'titulo' => "Editando o grupo " . esc($grupo->nome),
            'grupo' => $grupo,
        ];

        return view('Grupos/editar', $data);
    }

    public function atualizar(int $id = null)
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do grupo
        $grupo = $this->buscaGrupoOu404($post['id']);


        // preencher os atributos do grupo com os valores do POST
        $grupo->fill($post);

        if ($grupo->hasChanged() == false) {
            $retorno['info'] = 'Não existem dados para serem atualizados.';
            return $this->response->setJSON($retorno);
        }

        if ($this->grupoModel->protect(false)->save($grupo)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->grupoModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function excluir(int $id = null)
    {
        $grupo = $this->buscaGrupoOu404($id);

        if ($grupo->id == 1) {
            return redirect()
                ->back()
                ->with('atencao', 'O grupo <b>Administrador</b> não pode ser alterado nem excluído!');
        }

        if ($this->request->getMethod() === 'post') {

            // Deletar usuário
            $this->grupoModel->delete($grupo->id);


            return redirect()->to(site_url("grupos"))->with('sucesso', "Grupo $grupo->nome excluído com sucesso.");
        }

        $data = [
            'titulo' => "Excluindo grupo " . esc($grupo->nome),
            'grupo' => $grupo,
        ];

        return view('Grupos/excluir', $data);
    }

    public function desfazerExclusao(int $id = null)
    {
        $grupo = $this->buscaGrupoOu404($id);

        // Verificar se o usuário já foi excluído anteriormente
        if ($grupo->deletado_em == null) {
            return redirect()->back()->with('info', "Este grupo não encontra-se excluído.");
        }

        $grupo->deletado_em = null;
        $this->grupoModel->protect(false)->save($grupo);

        return redirect()->to(site_url("grupos"))->with('sucesso', "$grupo->nome reativado com sucesso!");
    }

    public function permissoes(int $id = null)
    {
        $grupo = $this->buscaGrupoOu404($id);

        if ($grupo->id == 1) {
            return redirect()
                ->back()
                ->with('atencao', 'O grupo Administrador já possui todas as permissões!');
        }

        if ($grupo->id > 1) {

            $grupo->permissoes = $this->grupoPermissaoModel->recuperaPermissoesDoGrupo($grupo->id, 5);
            $grupo->pager = $this->grupoPermissaoModel->pager;
        }


        $data = [
            'titulo' => "Gerenciando as permissões do grupo " . esc($grupo->nome),
            'grupo' => $grupo,
        ];

        if (!empty($grupo->permissoes)) {

            $permissoesExistentes = array_column($grupo->permissoes, 'permissao_id');

            $data['permissoesDisponiveis'] = $this->permissaoModel->whereNotIn('id', $permissoesExistentes)->findAll();
        } else {
            $data['permissoesDisponiveis'] = $this->permissaoModel->findAll();
        }

        return view('Grupos/permissoes', $data);
    }

    public function salvarPermissoes()
    {

        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do grupo
        $grupo = $this->buscaGrupoOu404($post['id']);

        if (empty($post['permissao_id'])) {

            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = ['permissao_id' => '<b class="text-danger">Escolha uma ou mais permissões para salvar.</b>'];
            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }

        // Receberá as permissões do POST
        $permissaoPush = [];

        foreach ($post['permissao_id'] as $permissao) {

            array_push($permissaoPush, [
                'grupo_id' => $grupo->id,
                'permissao_id' => $permissao,
            ]);
        }

        $this->grupoPermissaoModel->insertBatch($permissaoPush);

        session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

        return $this->response->setJSON($retorno);
    }

    public function removePermissao(int $principal_id = null)
    {


        if ($this->request->getMethod() === 'post') {

            // Deletar usuário
            $this->grupoPermissaoModel->delete($principal_id);


            return redirect()->back()->with('sucesso', "Permissão excluída com sucesso.");
        }


        return redirect()->back();
    }

    private function buscaGrupoOu404(int $id = null)
    {
        if (!$id || !$grupo = $this->grupoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o grupo $id");
        }

        return $grupo;
    }
}

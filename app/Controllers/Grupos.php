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
        ];


        $grupos = $this->grupoModel->select($atributos)
            ->findAll();

        $data = [];

        foreach ($grupos as $grupo) {

            $data[] = [
                'id' =>  $grupo->id,
                'nome' => anchor("grupos/exibir/$grupo->id", esc($grupo->nome), 'title="Exibir Grupo ' . esc($grupo->nome) . '"'),
                'descricao' => esc($grupo->descricao),
                'exibir' => ($grupo->exibir == true ? '<i class="fa fa-eye text-success" title="Em exibição"></i>' : '<i class="fa fa-eye-slash text-danger" title="Oculto"></i>'),
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

    public function permissoes(int $id = null)
    {
        // if( ! $this->usuarioLogado()->temPermissaoPara('editar-grupos')){

        //     return redirect()->back()->with('atencao', $this->usuarioLogado()->nome. ', você não tem permissão para acessar esse menu.' );
        // }

        $grupo = $this->buscaGrupoOu404($id);

        // Grupo administrador
        if ($grupo->id == 1) {
            return redirect()
                ->back()
                ->with('info', 'Não é necessário atribuir ou remover permissões de acesso para o grupo <b>' . esc($grupo->nome) . '</b>, pois esse esse grupo é Administrador.');
        }


        // Garantimos a recueração de permissões quando não for admin
        if ($grupo->id > 1) {
            $grupo->permissoes = $this->grupoPermissaoModel->recuperaPermissoesDoGrupo($grupo->id, 5);
            $grupo->pager = $this->grupoPermissaoModel->pager;
        }


        $data = [
            'titulo' => "Gerenciando as permissões do grupo de acesso " . esc($grupo->nome),
            'grupo' => $grupo,
        ];


        if (!empty($grupo->permissoes)) {
            $permissoesExistentes = array_column($grupo->permissoes, 'permissao_id');

            $data['permissoesDisponiveis'] = $this->permissaoModel->whereNotIn('id', $permissoesExistentes)->findAll();
        } else {

            // Se caiu aqui, é porque o grupo não possui nenhuma permissão.
            // Portanto, enviamos todas para a view
            $data['permissoesDisponiveis'] = $this->permissaoModel->findAll();
        }

        return view('Grupos/permissoes', $data);
    }

    private function buscaGrupoOu404(int $id = null)
    {
        if (!$id || !$grupo = $this->grupoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o grupo $id");
        }

        return $grupo;
    }
}

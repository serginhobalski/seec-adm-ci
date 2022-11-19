<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Curso;

class Cursos extends BaseController
{
    private $cursoModel;
    private $alunoCursoModel;

    public function __construct()
    {
        $this->cursoModel = new \App\Models\CursoModel();
        $this->alunoCursoModel = new \App\Models\AlunoCursoModel();
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
            'valor',
            'categoria',
            'ativo',
            'deletado_em',
        ];

        $cursos = $this->cursoModel->select($atributos)
            // $cursos = $this->cursoModel->select($atributos)
            ->withDeleted(true)
            ->orderBy('id', 'DESC')
            ->findAll();

        $data = [];

        foreach ($cursos as $curso) {

            $data[] = [
                'id' =>  $curso->id,
                'nome' => anchor("cursos/exibir/$curso->id", esc($curso->nome), 'title="Exibir curso ' . esc($curso->nome) . '"'),
                'valor' => 'R$ ' . implode(",", explode(".", $curso->valor)),
                'categoria' => strtoupper($curso->categoria),
                'ativo' => $curso->exibeSituacao(),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }

    public function criar(int $id = null)
    {
        $curso = new Curso();

        $data = [
            'titulo' => "Criando novo curso",
            'curso' => $curso,
        ];

        return view('Cursos/criar', $data);
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
        $curso = new Curso($post);


        if ($this->cursoModel->save($curso)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!<br> <a href=' . site_url('cursos/criar') . ' class="btn mt-2"><i class="fa fa-save"></i> Cadastrar outro curso</a>');

            $retorno['id'] = $this->cursoModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->cursoModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function exibir(int $id = null)
    {
        $curso = $this->buscaCursoOu404($id);

        $data = [
            'titulo' => "Detalhes do curso " . esc($curso->nome),
            'curso' => $curso,
        ];

        return view('Cursos/exibir', $data);
    }

    public function editar(int $id = null)
    {

        $curso = $this->buscaCursoOu404($id);

        $data = [
            'titulo' => "Editando o curso " . esc($curso->nome),
            'curso' => $curso,
        ];

        return view('Cursos/editar', $data);
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

        // Validar a existência do curso
        $curso = $this->buscaCursoOu404($post['id']);


        // preencher os atributos do curso com os valores do POST
        $curso->fill($post);

        if ($curso->hasChanged() == false) {
            $retorno['info'] = 'Não existem dados para serem atualizados.';
            return $this->response->setJSON($retorno);
        }

        if ($this->cursoModel->protect(false)->save($curso)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->cursoModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function excluir(int $id = null)
    {
        $curso = $this->buscaCursoOu404($id);

        if ($this->request->getMethod() === 'post') {

            // Deletar curso
            $this->cursoModel->delete($curso->id);


            return redirect()->to(site_url("cursos"))->with('sucesso', "Curso $curso->nome excluído com sucesso.");
        }

        $data = [
            'titulo' => "Excluindo curso " . esc($curso->nome),
            'curso' => $curso,
        ];

        return view('Cursos/excluir', $data);
    }

    public function desfazerExclusao(int $id = null)
    {
        $curso = $this->buscaCursoOu404($id);

        // Verificar se o curso já foi excluído anteriormente
        if ($curso->deletado_em == null) {
            return redirect()->back()->with('info', "Este curso não encontra-se excluído.");
        }

        $curso->deletado_em = null;
        $this->cursoModel->protect(false)->save($curso);

        return redirect()->to(site_url("cursos"))->with('sucesso', "$curso->nome reativado com sucesso!");
    }

    public function alunos(int $id = null)
    {
        $curso = $this->buscaCursoOu404($id);

        $curso->alunos = $this->alunoCursoModel->recuperaAlunosDoCurso($curso->id, 10);
        $curso->pager = $this->alunoCursoModel->pager;


        $data = [
            'titulo' => "Gerenciando os alunos do curso " . esc($curso->nome),
            'curso' => $curso,
        ];

        if (!empty($curso->alunos)) {

            $alunosExistentes = array_column($curso->alunos, 'permissao_id');

            $data['alunosDisponiveis'] = $this->permissaoModel->whereNotIn('id', $alunosExistentes)->findAll();
        } else {
            $data['alunosDisponiveis'] = $this->permissaoModel->findAll();
        }

        return view('cursos/alunos', $data);
    }

    private function buscaCursoOu404(int $id = null)
    {
        if (!$id || !$curso = $this->cursoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o curso $id");
        }

        return $curso;
    }
}

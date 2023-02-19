<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Aviso;

class Avisos extends BaseController
{
    private $avisoModel;

    public function __construct()
    {
        $this->avisoModel = new \App\Models\AvisoModel();
    }

    public function index()
    {
        $avisos = $this->avisoModel->select('*')->findAll();

        $data = [
            'titulo' => 'Painel de Avisos',
            'avisos' => $avisos,
        ];

        // dd($data);

        return view('Avisos/index', $data);
    }

    public function exibir(int $id = null)
    {
        $aviso = $this->buscaAvisoOu404($id);

        $data = [
            'titulo' => "Detalhes do Aviso",
            'aviso' => $aviso,
        ];

        return view('Avisos/exibir', $data);
    }

    public function detalhes(int $id = null)
    {
        $aviso = $this->buscaAvisoOu404($id);

        $data = [
            'titulo' => "Detalhes do Aviso",
            'aviso' => $aviso,
        ];

        return view('Avisos/detalhes', $data);
    }

    public function criar()
    {
        $aviso = new Aviso();

        $data = [
            'titulo' => 'Cadastro de evento',
            'aviso' => $aviso,
        ];
        return view('Avisos/criar', $data);
    }

    public function cadastrar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        // Envio o hash do token do form
        $retorno['token'] = csrf_hash();

        
        // Recupera o post da requisição
        $post = $this->request->getPost();

        // Criar nova instância da entidade relatório
        $aviso = new Aviso($post);
        
        $this->avisoModel->save($aviso);


        session()->setFlashdata('sucesso', 'Aviso cadastrado com sucesso!');


        // Retorno para o ajax request
        return $this->response->setJSON($retorno);
    }

    public function excluir(int $id = null)
    {
        $aviso = $this->buscaAvisoOu404($id);

        // Verificar se o aviso já foi excluído anteriormente
        if ($aviso->deletado_em != null) {
            return redirect()->back()->with('info', "Este aviso já encontra-se excluído.");
        }

        if ($this->request->getMethod() === 'post') {
            // Deletar aviso
            $this->avisoModel->delete($aviso->id);



            return redirect()->to(site_url("avisos"))->with('sucesso', "Aviso excluído com sucesso.");
        }
    }

    private function buscaAvisoOu404(int $id = null)
    {
        if (!$id || !$aviso = $this->avisoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o aviso $id");
        }

        return $aviso;
    }
}

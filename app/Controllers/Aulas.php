<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aulas extends BaseController
{
    private $usuarioModel;
    private $cursoModel;
    private $alunoCursoModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
        $this->cursoModel = new \App\Models\CursoModel();
        $this->alunoCursoModel = new \App\Models\AlunoCursoModel();
    }

    public function index()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você fazer login para visualizar esta página.");
        }

        $data = [
            'titulo' => 'Painel de ' . usuario_logado()->nome,
            'slug' => 'aulas',
        ];
        return view('Aulas/index', $data);
    }


    public function perfil()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você fazer login para visualizar esta página.");
        }

        $data = [
            'titulo' => 'Perfil de ' . usuario_logado()->nome,
            'slug' => 'perfil',
            'instrutor' => 'Sergio Obalski Filho',
        ];
        return view('Aulas/perfil', $data);
    }


    public function cursos()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você fazer login para visualizar esta página.");
        }

        $data = [
            'titulo' => 'Cursos de ' . usuario_logado()->nome,
            'slug' => 'cursos',
        ];
        return view('Aulas/cursos', $data);
    }


    public function mensagens()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você fazer login para visualizar esta página.");
        }

        $data = [
            'titulo' => 'Mensagens de ' . usuario_logado()->nome,
            'slug' => 'mensagens',
        ];
        return view('Aulas/mensagens', $data);
    }


    public function editarImagem()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você fazer login para visualizar esta página.");
        }

        $id = usuario_logado()->id;

        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Alterando imagem de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Aulas/editar_imagem', $data);
    }



    public function upload()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'imagem' => 'uploaded[imagem]|max_size[imagem,1024]|ext_in[imagem,png,jpg,jpeg,gif]',
        ];

        $mensagens = [   // Errors
            'imagem' => [
                'uploaded' => '<b class="text-danger">Por favor selecione uma imagem.</b>',
                'max_size' => '<b class="text-danger">Use uma imagem de no máximo 1MB.</b>',
                'ext_in' => '<b class="text-danger">Tipo de arquivo não suportado.<br> Use somente imagens do tipo ".jpg", ".gif" ou ".png".</b>',
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
        $usuario = $this->buscaUsuarioOu404($post['id']);


        $imagem = $this->request->getFile('imagem');


        list($largura, $altura) = getimagesize($imagem->getPathName());

        if ($largura < "200" || $altura < "200") {
            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = ['dimensão' => 'A imagem não pode ser menor que 200 x 200 px.'];
            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }


        $imagemCaminho = $imagem->store('usuarios');

        $imagemCaminho = WRITEPATH . "uploads/$imagemCaminho";

        // service('image')->withFile($imagemCaminho)
        //     ->fit(200, 200, 'center')
        //     ->save($imagemCaminho);

        $imagemAntiga = $usuario->imagem;

        $usuario->imagem = $imagem->getName();

        $this->usuarioModel->save($usuario);

        if ($imagemAntiga != null) {
            $this->removeImagemAntiga($imagemAntiga);
        }


        session()->setFlashdata('sucesso', 'Imagem atualizada com sucesso!');


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function imagem(string $imagem = null)
    {

        if ($imagem != null) {
            $this->exibeArquivo('usuarios', $imagem);
        }
    }


    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
        }

        return $usuario;
    }

    private function removeImagemAntiga(string $imagem)
    {
        $imagemCaminho = WRITEPATH . "uploads/usuarios/$imagem";

        if (is_file($imagemCaminho)) {
            unlink($imagemCaminho);
        }
    }
}

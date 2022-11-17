<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Database\Seeds\UsuarioSeeder;
use App\Entities\Usuario;

use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    private $usuarioModel;
    private $grupoUsuarioModel;
    private $grupoModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
        $this->grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();
        $this->grupoModel = new \App\Models\GrupoModel();
    }

    public function index()
    {
        $data = [
            'titulo' => 'Usuários',
        ];
        return view('Usuarios/index', $data);
    }

    public function recuperaUsuarios()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'id',
            'nome',
            'local',
            'login',
            'admin',
            'ativo',
            'imagem',
            'deletado_em',
        ];


        $usuarios = $this->usuarioModel->select($atributos)
            ->withDeleted(true)
            ->orderBy('nome', 'DESC')
            ->findAll();



        $data = [];

        foreach ($usuarios as $usuario) {

            if ($usuario->imagem != null) {
                $imagem = [
                    'src' => site_url("usuarios/imagem/$usuario->imagem"),
                    'class' => 'rounded-circle img-fluid',
                    'alt' => esc($usuario->nome),
                    'width' => '50',
                ];
            } else {
                $imagem = [
                    'src' => site_url("src/assets/images/itq.jpg"),
                    'class' => 'rounded-circle img-fluid',
                    'alt' => 'Sem imagem',
                    'width' => '50',
                ];
            }


            $data[] = [
                'imagem' => $usuario->imagem = img($imagem),
                'nome' => anchor("usuarios/exibir/$usuario->id", esc($usuario->nome), 'title="Exibir ' . esc($usuario->nome) . '"'),
                'local' => esc($usuario->local),
                'login' => esc($usuario->login),
                // 'admin' => ($usuario->admin == true ? '<span class="text-success">Admin Geral </span>' : '<span class="text-warning">UETP </span>'),
                'ativo' => $usuario->exibeSituacao(),
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

    public function exibir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Detalhes de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/exibir', $data);
    }

    public function editar(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Editando " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/editar', $data);
    }

    public function editarUsuarioLogado()
    {
        $data = [
            'titulo' => "Editando " . esc(usuario_logado()->nome),
            'usuario' => usuario_logado(),
        ];

        return view('Usuarios/editar_usuario_logado', $data);
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

        // Validar a existência do usuário
        $usuario = $this->buscaUsuarioOu404($post['id']);

        // Remover o campo 'password' se o campo não foi preenchido
        if (empty($post['password'])) {

            unset($post['password']);
            unset($post['password_confirmation']);
        }

        // preencher os atributos do usuários com os valores do POST
        $usuario->fill($post);

        if ($usuario->hasChanged() == false) {
            $retorno['info'] = 'Não existem dados para serem atualizados.';
            return $this->response->setJSON($retorno);
        }

        if ($this->usuarioModel->protect(false)->save($usuario)) {

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    public function editarImagem(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Alterando imagem de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/editar_imagem', $data);
    }

    public function upload(int $id = null)
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

    public function excluir(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        // Verificar se o usuário já foi excluído anteriormente
        if ($usuario->deletado_em != null) {
            return redirect()->back()->with('info', "Este usuário já encontra-se excluído.");
        }

        if ($this->request->getMethod() === 'post') {

            // Deletar usuário
            $this->usuarioModel->delete($usuario->id);

            // Remove imagem do arquivo
            if ($usuario->imagem != null || $usuario->imagem != '') {
                $this->removeImagemAntiga($usuario->imagem);
            }

            $usuario->imagem = null;
            $usuario->ativo = false;

            $this->usuarioModel->protect(false)->save($usuario);


            return redirect()->to(site_url("usuarios"))->with('sucesso', "$usuario->nome excluído com sucesso.");
        }

        $data = [
            'titulo' => "Excluindo usuário " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        return view('Usuarios/excluir', $data);
    }

    public function desfazerExclusao(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        // Verificar se o usuário já foi excluído anteriormente
        if ($usuario->deletado_em == null) {
            return redirect()->back()->with('info', "Este usuário não encontra-se excluído.");
        }

        $usuario->deletado_em = null;
        $this->usuarioModel->protect(false)->save($usuario);

        return redirect()->back()->with('sucesso', "$usuario->nome reativado com sucesso!");
    }

    public function grupos(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $usuario->grupos = $this->grupoUsuarioModel->recuperaGruposDoUsuario($usuario->id, 5);
        $usuario->pager = $this->grupoUsuarioModel->pager;

        $data = [
            'titulo' => "Gerenciando grupos de acesso de " . esc($usuario->nome),
            'usuario' => $usuario,
        ];

        $grupoAdmin = 1;
        if (in_array($grupoAdmin, array_column($usuario->grupos, 'grupo_id'))) {

            $usuario->full_control = true;
            return view('Usuarios/grupos', $data);
        }

        $usuario->full_control = false;


        if (!empty($usuario->grupos)) {
            // Recuperamos os grupos disponíveis ao usuário
            $gruposExistentes = array_column($usuario->grupos, 'grupo_id');

            $data['gruposDisponiveis'] = $this->grupoModel
                // ->where('id !=', 1)
                ->whereNotIn('id', $gruposExistentes)
                ->findAll();
        } else {
            // recuperamos todos os grupos
            $data['gruposDisponiveis'] = $this->grupoModel
                // ->where('id !=', 1)
                ->findAll();
        }

        return view('Usuarios/grupos', $data);
    }

    public function salvarGrupos()
    {

        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        // Recuperar o post da requisição
        $post = $this->request->getPost();

        // Validar a existência do usuário
        $usuario = $this->buscaUsuarioOu404($post['id']);

        if (empty($post['grupo_id'])) {

            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = ['grupo_id' => '<b class="text-danger">Escolha um ou mais grupos para salvar.</b>'];
            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }


        if (in_array(1, $post['grupo_id'])) {

            $grupoAdmin = [
                'grupo_id' => 1,
                'usuario_id' => $usuario->id,
            ];

            $this->grupoUsuarioModel->insert($grupoAdmin);

            $this->grupoUsuarioModel->where('grupo_id !=', 1)
                ->where('usuario_id', $usuario->id)
                ->delete();


            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');
            session()->setFlashdata('info', 'O grupo <b>Administrador</b> já engloba todos os outros grupos de acesso!');

            // Retorno para o AJAX request
            return $this->response->setJSON($retorno);
        }



        // Receberá as permissões do POST
        $grupoPush = [];

        foreach ($post['grupo_id'] as $grupo) {

            array_push($grupoPush, [
                'grupo_id' => $grupo,
                'usuario_id' => $usuario->id,
            ]);

            $this->grupoUsuarioModel->insertBatch($grupoPush);

            session()->setFlashdata('sucesso', 'Dados salvos com sucesso!');

            return $this->response->setJSON($retorno);
        }
    }

    public function removeGrupo(int $principal_id = null)
    {

        if ($this->request->getMethod() === 'post') {

            $grupoUsuario = $this->buscaGrupoUsuarioOu404($principal_id);

            $this->grupoUsuarioModel->delete($principal_id);
            return redirect()->back()->with("sucesso", "Grupo removido!");
        }

        // Se não for via POST
        return redirect()->back();
    }

    public function editarSenha()
    {

        $data = [
            'titulo' => "Alterando senha de acesso.",
        ];

        return view('Usuarios/editar_senha', $data);
    }

    public function atualizarSenha()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }


        // Envia o hash do token do form
        $retorno['token'] = csrf_hash();


        $current_password = $this->request->getPost('current_password');

        // Recupera o usuário logado
        $usuario = usuario_logado();



        if ($usuario->verificaPassword($current_password) === false) {
            $retorno['erro'] = 'Por favor verifique os erros abaixo e tente novamente';
            $retorno['erros_model'] = ['current_password' => 'Senha atual inválida'];
            return $this->response->setJSON($retorno);
        }


        $usuario->fill($this->request->getPost());


        if ($usuario->hasChanged() === false) {
            $retorno['info'] = 'Não há dados para atualizar';
            return $this->response->setJSON($retorno);
        }

        if ($this->usuarioModel->save($usuario)) {
            $retorno['sucesso'] = 'Senha atualiza com sucesso';

            return $this->response->setJSON($retorno);
        }

        // Retornamos os erros de validação
        $retorno['erro'] = 'Por favor verifique os abaixo e tente novamente';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o ajax request
        return $this->response->setJSON($retorno);
    }

    public function criar()
    {
        $usuario = new Usuario();

        $data = [
            'titulo' => 'Cadastro de usuário',
            'usuario' => $usuario,
        ];
        return view('Usuarios/criar', $data);
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
        $usuario = new Usuario($post);


        if ($this->usuarioModel->protect(false)->save($usuario)) {
            $btnCriar = anchor("usuarios/criar", 'Cadastrar novo usuário', ['class' => 'btn mt-2']);

            session()->setFlashdata('sucesso', "Dados salvos com sucesso! $btnCriar");

            $retorno['id'] = $this->usuarioModel->getInsertID();

            return $this->response->setJSON($retorno);
        }

        $retorno['erro'] = 'Por favor verifique os erros abaixo.';
        $retorno['erros_model'] = $this->usuarioModel->errors();


        // Retorno para o AJAX request
        return $this->response->setJSON($retorno);
    }

    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
        }

        return $usuario;
    }

    /**
     * Método que recupera o registro de grupos associados ao usuário
     *
     * @param integer|null $principal_id
     * @return Exception|object
     */
    private function buscaGrupoUsuarioOu404(int $principal_id = null)
    {
        if (!$principal_id || !$grupoUsuario = $this->grupoUsuarioModel->find($principal_id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos associação com o grupo $principal_id");
        }

        return $grupoUsuario;
    }

    private function removeImagemAntiga(string $imagem)
    {
        $imagemCaminho = WRITEPATH . "uploads/usuarios/$imagem";

        if (is_file($imagemCaminho)) {
            unlink($imagemCaminho);
        }
    }
}

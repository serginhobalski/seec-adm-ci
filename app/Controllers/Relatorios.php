<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Entities\Relatorio;

class Relatorios extends BaseController
{
    private $relatorioModel;
    private $usuarioModel;
    private $grupoUsuarioModel;

    public function __construct()
    {
        $this->relatorioModel = new \App\Models\RelatorioModel();
        $this->usuarioModel = new \App\Models\UsuarioModel();
        $this->grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();
    }

    public function index()
    {
        if (usuario_logado()->is_admin === false) {
            if (usuario_logado()->is_uetp) {
                return redirect(site_url('relatorios/meusrelatorios'));
            } else {
                return redirect()->back();
            }
        }

        $data = [
            'titulo' => 'Relatórios',
        ];
        return view('Relatorios/index', $data);
    }

    public function meusRelatorios()
    {
        $qtdRelatorios = $this->relatorioModel->where('nome', usuario_logado()->nome)->countAllResults();

        $data = [
            'titulo' => 'Relatórios',
            'relatorios' => $qtdRelatorios,
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
                'nome' => anchor("relatorios/exibir/$relatorio->id", esc($relatorio->nome), 'title="Exibir relatório de ' . $relatorio->mes . '/' . $relatorio->ano . '"'),
                'local' => esc($relatorio->local),
                'mes' => anchor("relatorios/exibir/$relatorio->id", esc($relatorio->mes), 'title="Exibir relatório de ' . $relatorio->mes . '/' . $relatorio->ano . '"'),
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

        $uetps = $this->grupoUsuarioModel->select('*')
            ->where('grupos_usuarios.grupo_id', 2)
            ->join('usuarios', 'usuarios.id = grupos_usuarios.usuario_id')
            ->groupBy('usuarios.nome')
            ->orderBy('usuarios.nome')
            ->findAll();

        $data = [
            'titulo' => 'Cadastro de relatório',
            'relatorio' => $relatorio,
            'uetps' => $uetps,

        ];
        return view('Relatorios/criar', $data);
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

        // Validar a existência do relatorio
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

    public function cadastrar()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }

        // Envio o hash do token do form
        $retorno['token'] = csrf_hash();

        $validacao = service('validation');

        $regras = [
            'comprovante' => 'uploaded[comprovante]|max_size[comprovante,1024]|ext_in[comprovante,png,jpg,jpeg,gif,pdf]',
            'relatorio' => 'uploaded[relatorio]|max_size[relatorio,1024]|ext_in[relatorio,png,jpg,jpeg,gif,pdf]',
        ];

        $mensagens = [   // Errors
            'comprovante' => [
                'uploaded' => 'Por favor escolha um arquivo',
                'max_size' => 'Por favor escolha um arquivo de no máximo 3MB',
                'ext_in'   => 'Por favor escolha um arquivo png, jpg, jpeg, gif ou pdf',
            ],
            'relatorio' => [
                'uploaded' => 'Por favor escolha um arquivo',
                'max_size' => 'Por favor escolha um arquivo de no máximo 3MB',
                'ext_in'   => 'Por favor escolha um arquivo png, jpg, jpeg, gif ou pdf',
            ],
        ];

        $validacao->setRules($regras, $mensagens);

        if ($validacao->withRequest($this->request)->run() === false) {
            $retorno['erro'] = 'Por favor verifique os erros abaixo e tente novamente';
            $retorno['erros_model'] = $validacao->getErrors();

            // Retorno para o ajax request
            return $this->response->setJSON($retorno);
        }

        // Recupera o post da requisição
        $post = $this->request->getPost();

        // Criar nova instância da entidade relatório
        $relatorio = new Relatorio($post);


        // Recuperar os arquivos enviados no post
        $comprovante = $this->request->getFile('comprovante');
        $relatorioAnexo = $this->request->getFile('relatorio');

        $caminhoComprovante = $comprovante->store('comprovantes');
        $caminhoRelatorio = $relatorioAnexo->store('relatorios');


        $caminhoComprovante = WRITEPATH . "uploads/$caminhoComprovante";
        $caminhoRelatorio = WRITEPATH . "uploads/$caminhoRelatorio";


        // Atualizar a tabela de relatórios
        $relatorio->comprovante = $comprovante->getName();
        $relatorio->relatorio = $relatorioAnexo->getName();


        $this->relatorioModel->save($relatorio);


        session()->setFlashdata('sucesso', 'Relatório cadastrado com sucesso!');


        // Retorno para o ajax request
        return $this->response->setJSON($retorno);
    }

    public function comprovante(string $comprovante = null)
    {

        if ($comprovante != null) {
            $this->exibeArquivo('comprovantes', $comprovante);
        }
    }

    public function relatorioAnexo(string $relatorioAnexo = null)
    {

        if ($relatorioAnexo != null) {
            $this->exibeArquivo('relatorios', $relatorioAnexo);
        }
    }

    private function removeComprovanteAntigo(string $comprovante)
    {
        $arquivoCaminho = WRITEPATH . "uploads/relatorios/$comprovante";

        if (is_file($arquivoCaminho)) {
            unlink($arquivoCaminho);
        }
    }
}

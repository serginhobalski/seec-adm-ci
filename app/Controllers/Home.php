<?php

namespace App\Controllers;

use App\Libraries\Autenticacao;

class Home extends BaseController
{
    private $cursoModel;
    private $usuarioModel;
    private $disciplinaModel;
    private $cursoDisciplinaModel;
    private $notaEnaqModel;

    public function __construct()
    {
        $this->cursoModel = new \App\Models\CursoModel();
        $this->usuarioModel = new \App\Models\UsuarioModel();
        $this->disciplinaModel = new \App\Models\DisciplinaModel();
        $this->cursoDisciplinaModel = new \App\Models\CursoDisciplinaModel();
        $this->notaEnaqModel = new \App\Models\NotaEnaqModel();
    }

    public function index()
    {
        $atributos = [
            'id',
            'nome',
            'descricao',
            'valor',
            'categoria',
            'ativo',
        ];

        $cursos = $this->cursoModel->select($atributos)
            ->findAll();

        $data = [
            'titulo' => 'Início',
            'cursos' => $cursos,
        ];
        return view('Home/index', $data);
    }

    public function cursos()
    {
        $atributos = [
            'id',
            'nome',
            'descricao',
            'valor',
            'categoria',
            'ativo',
        ];

        $cursos = $this->cursoModel->select($atributos)
            ->findAll();

        $data = [
            'titulo' => 'Cursos SEEC-PA',
            'subtitulo' => 'Promovendo seu crescimento contínuo!',
            'cursos' => $cursos,
        ];
        return view('Home/cursos', $data);
    }

    public function cursoDetalhes(int $id = null)
    {
        $curso = $this->buscaCursoOu404($id);

        $disciplinas = $this->cursoDisciplinaModel->recuperaDisciplinasDoCurso($id, 10);
        $qtd_disciplinas = $this->cursoDisciplinaModel->where('curso_disciplinas.curso_id', $id)->countAllResults();
        $modulos = $this->cursoModel->select('*')->findAll(limit: 3);

        $data = [
            'titulo' => "Detalhes de " . esc($curso->nome),
            'subtitulo' => esc($curso->descricao),
            'curso' => $curso,
            'disciplinas' => $disciplinas,
            'qtd_disciplinas' => $qtd_disciplinas,
            'modulos' => $modulos,
        ];

        return view('Home/curso_detalhes', $data);
    }

    public function login()
    {
        if (!usuario_logado()->is_admin) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        dd(usuario_logado());
    }

    public function email()
    {
        if (!usuario_logado()->is_admin) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $email = service('email');

        $email->setFrom('host@ead.seecpa.com.br', 'SEEC Pará');
        $email->setTo('ead@seecpa.com.br');

        $email->setSubject('Recuperação de Senha');
        $email->setMessage('Iniciando a recuperação de senha....');

        if ($email->send()) {
            echo 'Email enviado!';
        } else {
            $email->printDebugger();
        }
    }

    public function editarImagem(int $id = null)
    {
        $usuario = $this->buscaUsuarioOu404($id);

        $data = [
            'titulo' => "Alterando imagem de " . esc($usuario->nome),
            'subtitulo' => "Atualização de Dados",
            'usuario' => $usuario,
        ];

        return view('Home/editar_imagem', $data);
    }

    public function editarUsuarioLogado()
    {
        if (!usuario_logado()) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $data = [
            'titulo' => "Atualizando " . esc(usuario_logado()->nome),
            'subtitulo' => "Atualize suas informações",
            'usuario' => usuario_logado(),
        ];

        return view('Home/editar_usuario_logado', $data);
    }


    public function itq()
    {
        $data = [
            'titulo' => 'ITQ EAD',
            'subtitulo' => 'Ensino teológico ao seu alcance',
        ];
        return view('Home/itq', $data);
    }

    public function professor()
    {
        if (usuario_logado() === null) {
            return redirect()->back()->with("info", "Você precisa fazer login para visualizar esta página.");
        }
        if (usuario_logado()->is_admin === false && usuario_logado()->is_professor === false) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }
        $data = [
            'titulo' => 'Área do Professor',
            'subtitulo' => usuario_logado()->nome,
        ];
        return view('Home/professor', $data);
    }

    public function aluno()
    {
        if (usuario_logado() === null) {
            return redirect()->back()->with("info", "Você precisa fazer login para visualizar esta página.");
        }
        if (!usuario_logado()->is_admin && !usuario_logado()->is_aluno) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $atributos = [
            'id',
            'nome',
            'descricao',
            'valor',
            'categoria',
            'ativo',
        ];

        $cursos = $this->cursoModel->select($atributos)
            ->findAll();

        $data = [
            'titulo' => 'Área do Aluno',
            'subtitulo' => usuario_logado()->nome,
            'cursos' => $cursos,
        ];

        return view('Home/aluno', $data);
    }

    public function postulantes()
    {
        $data = [
            'titulo' => 'Curso de Postulantes',
            'subtitulo' => 'Preparando nosso ministério',
        ];
        return view('Home/postulantes', $data);
    }

    public function enaq()
    {
        $data = [
            'titulo' => 'ENAQ',
            'subtitulo' => 'Exame Nacional do Ministério Quadrangular',
        ];
        return view('Home/enaq', $data);
    }



    public function treinamentos()
    {
        $data = [
            'titulo' => 'Treinamentos SEEC-PA',
            'subtitulo' => 'Preparando nossos líderes e nossa membresia',
        ];
        return view('Home/treinamentos', $data);
    }

    public function nossos_cursos()
    {
        $data = [
            'titulo' => 'Cursos da SEEC-PA',
            'subtitulo' => 'Conheça nossos cursos!',
        ];
        return view('Home/nossos_cursos', $data);
    }

    public function resultados_enaq()
    {
        $data = [
            'titulo' => 'Resultados do ENAQ',
            'subtitulo' => 'Fique por dentro dos resultados do ENAQ!',
        ];
        return view('Home/resultados_enaq', $data);
    }

    public function recuperaResultadosEnaq()
    {
        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        $atributos = [
            'id',
            'ano',
            'local',
            'nome',
            'prova',
            'redacao',
            'media',
        ];

        $resultados = $this->notaEnaqModel->select($atributos)
            ->findAll();

        $data = [];


        foreach ($resultados as $resultado) {

            $nomeRelatorio = esc($resultado->nome);

            $data[] = [
                'id' => $resultado->id,
                'ano' => esc($resultado->ano),
                'local' => esc($resultado->local),
                'nome' => anchor("home/exibirnotaenaq/$resultado->id", esc($resultado->nome), 'title="Exibir ' . $nomeRelatorio . '"'),
                'prova' => implode(',', explode('.', $resultado->prova)),
                'redacao' => implode(',', explode('.', $resultado->redacao)),
                'media' => implode(',', explode('.', $resultado->media)),
            ];
        }

        $retorno = [
            'data' => $data,
        ];

        return $this->response->setJSON($retorno);
    }

    public function exibirNotaEnaq(int $id = null)
    {
        $resultado = $this->buscaResultadoOu404($id);

        $data = [
            'titulo' => "Detalhes da nota ENAQ",
            'subtitulo' => "Exibindo detalhes da nota",
            'resultado' => $resultado,
        ];

        return view('Home/exibir_nota_enaq', $data);
    }

    public function seec()
    {
        $data = [
            'titulo' => 'SEEC-PA',
            'subtitulo' => 'Secretaria Estadual de Educação e Cultura da IEQ no Pará.',
        ];
        return view('Home/seec', $data);
    }

    public function departamentos()
    {
        $data = [
            'titulo' => 'Nossos Departamentos',
            'subtitulo' => 'Conheça nosso time.',
        ];
        return view('Home/departamentos', $data);
    }

    public function calendario_geral()
    {
        $data = [
            'titulo' => 'Calendário Geral',
            'subtitulo' => 'Fique por dentro de toda a nossa programação.',
        ];
        return view('Home/calendario_geral', $data);
    }

    public function calendario_eventos()
    {
        $data = [
            'titulo' => 'Eventos SEEC-PA',
            'subtitulo' => 'Fique por dentro de toda a nossa programação.',
        ];
        return view('Home/calendario_eventos', $data);
    }

    public function contato()
    {
        $data = [
            'titulo' => 'Contato SEEC-PA',
            'subtitulo' => 'Temos grande prazer em ajudar.',
        ];
        return view('Home/contato', $data);
    }

    private function buscaUsuarioOu404(int $id = null)
    {
        if (!$id || !$usuario = $this->usuarioModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o usuário $id");
        }

        return $usuario;
    }

    private function buscaCursoOu404(int $id = null)
    {
        if (!$id || !$curso = $this->cursoModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o curso $id");
        }

        return $curso;
    }

    private function buscaResultadoOu404(int $id = null)
    {
        if (!$id || !$resultado = $this->notaEnaqModel->withDeleted(true)->find($id)) {

            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Não encontramos o registro $id");
        }

        return $resultado;
    }
}

<?php

namespace App\Controllers;

use App\Libraries\Autenticacao;

class Adm extends BaseController
{
    private $usuariosCadastrados;
    private $relatoriosCadastrados;
    private $gruposUsuarios;

    public function __construct()
    {
        $this->usuariosCadastrados = new \App\Models\UsuarioModel();
        $this->relatoriosCadastrados = new \App\Models\RelatorioModel();
        $this->gruposUsuarios = new \App\Models\GrupoUsuarioModel();
    }

    public function index()
    {
        if (!usuario_logado()->is_admin) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $anoAtual = date('Y');

        $quantidadeUsuarios = $this->usuariosCadastrados->countAllResults();
        $quantidadeRelatorios = $this->relatoriosCadastrados->countAllResults();
        $admins = $this->gruposUsuarios->where('grupo_id', 1)->countAllResults();
        $uetps = $this->gruposUsuarios->where('grupo_id', 2)->countAllResults();
        $professores = $this->gruposUsuarios->where('grupo_id', 3)->countAllResults();
        $alunos = $this->gruposUsuarios->where('grupo_id', 4)->countAllResults();
        $secretarios = $this->gruposUsuarios->where('grupo_id', 5)->countAllResults();
        $relatoriosAno = $this->relatoriosCadastrados->where('ano', $anoAtual)->countAllResults();

        $data = [
            'titulo' => 'Painel',
            'usuarios' => $quantidadeUsuarios,
            'relatorios' => $quantidadeRelatorios,
            'admins' => $admins,
            'uetps' => $uetps,
            'professores' => $professores,
            'alunos' => $alunos,
            'secretarios' => $secretarios,
            'relatoriosAno' => $relatoriosAno,
        ];
        return view('Adm/index', $data);
    }

    public function uetp()
    {
        if (!usuario_logado()->is_admin && !usuario_logado()->is_uetp) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        $data = [
            'titulo' => 'UETP ' . usuario_logado()->nome . '!',
        ];
        return view('Adm/uetp', $data);
    }

    public function secretaria()
    {
        if (!usuario_logado()->is_admin && !usuario_logado()->is_secretaria) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }
        $data = [
            'titulo' => 'Painel | Secretaria',
        ];
        return view('Adm/secretaria', $data);
    }

    public function login()
    {
        if (!usuario_logado()->is_admin) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }

        // $autenticacao = service('autenticacao');

        // $autenticacao->login('teste', 'teste123456');

        // $usuario = $autenticacao->pegaUsuarioLogado();


        // dd($autenticacao->login('admin', 'admin123456'));
        // dd($usuario);
        // $autenticacao->logout();
        // return redirect()->to(site_url('adm'));
    }

    public function professor()
    {
        if (!usuario_logado()->is_admin && !usuario_logado()->is_professor) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }
        $data = [
            'titulo' => 'Painel | Professor',
        ];
        return view('Adm/professor', $data);
    }

    public function aluno()
    {
        if (!usuario_logado()->is_admin && !usuario_logado()->is_aluno) {
            return redirect()->back()->with("info", "Você não possui permissão para visualizar esta página.");
        }
        $data = [
            'titulo' => 'Painel | Aluno',
        ];
        return view('Adm/aluno', $data);
    }

    public function mensagens()
    {
        $data = [
            'titulo' => 'Mensagens',
        ];
        return view('Adm/mensagens', $data);
    }

    public function calendario()
    {
        $data = [
            'titulo' => 'Calendário',
        ];
        return view('Adm/calendario', $data);
    }

    public function perfil()
    {
        $data = [
            'titulo' => 'Perfil',
        ];
        return view('Adm/perfil', $data);
    }
}

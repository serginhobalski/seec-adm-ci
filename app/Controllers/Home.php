<?php

namespace App\Controllers;

use App\Libraries\Autenticacao;

class Home extends BaseController
{
    public function index()
    {
        // dd(usuario_logado());

        $data = [
            'titulo' => 'Início',
        ];
        return view('Home/index', $data);
    }

    public function login()
    {
        dd(usuario_logado());
        // $autenticacao = new Autenticacao();
        // dd($autenticacao);
        // dd($autenticacao->login('admin', 'admin123456'));
        // $autenticacao->logout();
        // return redirect()->to(site_url('adm'));
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
        $data = [
            'titulo' => 'Área de ' . usuario_logado()->nome . '!',
            'subtitulo' => 'Esta é a sua área!',
        ];
        return view('Home/professor', $data);
    }

    public function aluno()
    {
        $data = [
            'titulo' => 'Área de ' . usuario_logado()->nome . '!',
            'subtitulo' => 'Esta é a sua área!',
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
}

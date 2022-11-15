<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function novo()
    {
        $data = [
            'titulo' => 'Login'
        ];

        return view('Login/novo', $data);
    }

    public function criar()
    {

        if (!$this->request->isAJAX()) {

            return redirect()->back();
        }

        // Enviar hash do token do form
        $retorno['token'] = csrf_hash();

        $login = $this->request->getPost('login');

        $password = $this->request->getPost('password');

        // Recupera instância do serviço de autenticação
        $autenticacao = service('autenticacao');



        if ($autenticacao->login($login, $password) === false) {
            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = ['credenciais' => '<b class="text-danger">Login ou senha incorretos.</b>'];
            return $this->response->setJSON($retorno);
        }

        // Recupera o usuário logado
        $usuarioLogado = $autenticacao->pegaUsuarioLogado();

        session()->setFlashdata('sucesso', "Olá $usuarioLogado->nome, seja bem-vindo!");

        if ($usuarioLogado->is_admin) {

            $retorno['redirect'] = 'adm';
            return $this->response->setJSON($retorno);
        }

        if ($usuarioLogado->is_uetp) {

            $retorno['redirect'] = 'adm/uetp';
            return $this->response->setJSON($retorno);
        }

        $retorno['redirect'] = 'home';
        return $this->response->setJSON($retorno);
    }

    public function logout()
    {
        $autenticacao = service('autenticacao');

        $usuarioLogado = $autenticacao->pegaUsuarioLogado();

        $autenticacao->logout();

        return redirect()->to(site_url("login/mostramensagemlogout/$usuarioLogado->nome"));
    }

    public function mostraMensagemLogout($nome = null)
    {
        return redirect()->to(site_url("login"))->with("sucesso", "$nome saiu da aplicação.");
    }
}

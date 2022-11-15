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

        $autenticacao = service('autenticacao');



        if ($autenticacao->login($login, $password) === false) {
            $retorno['erro'] = 'Por favor verifique os erros abaixo.';
            $retorno['erros_model'] = ['credenciais' => '<b class="text-danger">Login ou senha incorretos.</b>'];
            return $this->response->setJSON($retorno);
        }

        // recupero o usuário logado
        $usuarioLogado = $autenticacao->pegaUsuarioLogado();

        session()->setFlashdata('sucesso', "Olá $usuarioLogado->nome, seja bem-vindo!");

        if ($usuarioLogado->is_uetp) {
        }
    }
}

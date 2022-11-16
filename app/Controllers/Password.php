<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Password extends BaseController
{

    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new \App\Models\UsuarioModel();
    }

    public function esqueci()
    {
        $data = [
            'titulo' => 'Esqueci a minha senha',
        ];

        return view('Password/esqueci', $data);
    }

    public function processaEsqueci()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->back();
        }


        // Envio o hash do token do form
        $retorno['token'] = csrf_hash();

        $post = $this->request->getPost();


        echo '<pre>';
        print_r($post);
        exit;



        // Recupero o e-mail da requisição
        // $email = $this->request->getPost('email');


        // $usuario = $this->usuarioModel->buscaUsuarioPorEmail($email);

        // if ($usuario === null || $usuario->ativo === false) {
        //     $retorno['erro'] = 'Não encontramos uma conta válida com esse e-mail <br> Caso esta conta não possua e-mail cadastrado, favor solicitar nova senha para <b>ead@seecpa.com.br</b>';
        //     return $this->response->setJSON($retorno);
        // }


        // $usuario->iniciaPasswordReset();



        // $this->usuarioModel->save($usuario);



        // $this->enviaEmailRedefinicaoSenha($usuario);


        // return $this->response->setJSON([]);
    }
}

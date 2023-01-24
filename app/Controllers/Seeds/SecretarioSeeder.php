<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SecretarioSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarios = [
            [
                'nome' => 'NEAD SEEC-PA',
                'local' => 'Belém',
                'login' => 'nead',
                'email' => 'ead@seecpa.com.br',
                'telefone' => '(91) 99188-2198',
                'password' => 'ead123',
                'ativo' => true,
                'admin' => false,
            ],

        ];



        foreach ($usuarios as $usuario) {

            // Salva o usuário no BD
            $usuarioModel->skipValidation(true)->protect(false)->insert($usuario);


            $grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();


            $grupoUsuario = [
                'grupo_id' => 5,
                'usuario_id' => $usuarioModel->getInsertID(),
            ];

            // Insere o usuário no grupo
            $grupoUsuarioModel->protect(false)->insert($grupoUsuario);
        }



        echo 'Usuario semeado com sucesso, com o grupo Secretaria!';
    }
}

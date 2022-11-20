<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfessoresSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \App\Models\UsuarioModel();

        $usuarios = [
            [
                'nome' => 'Sergio Obalski Filho',
                'local' => 'Belém',
                'login' => 'serginhobalski',
                'email' => 'serginhobalski@gmail.com',
                'telefone' => '(91) 99188-2198',
                'password' => 'serele21',
                'ativo' => true,
                'admin' => false,
            ],
            [
                'nome' => 'Eurides Obalski',
                'local' => 'Ananindeua',
                'login' => 'euaobalski',
                'email' => 'euaobalski@gmail.com',
                'telefone' => '(91) 99981-2198',
                'password' => 'professor2022',
                'ativo' => true,
                'admin' => false,
            ],
            [
                'nome' => 'Letícia Obalski',
                'local' => 'Belém',
                'login' => 'ticia10',
                'email' => 'ticia10@gmail.com',
                'telefone' => '(91) 98412-5763',
                'password' => 'professor2022',
                'ativo' => true,
                'admin' => false,
            ],

        ];



        foreach ($usuarios as $usuario) {

            // Salva o usuário no BD
            $usuarioModel->skipValidation(true)->protect(false)->insert($usuario);


            $grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();


            $grupoUsuario = [
                'grupo_id' => 3,
                'usuario_id' => $usuarioModel->getInsertID(),
            ];

            // Insere o usuário no grupo
            $grupoUsuarioModel->protect(false)->insert($grupoUsuario);
        }



        echo 'Usuarios semeados com sucesso, com o grupo Professor!';
    }
}

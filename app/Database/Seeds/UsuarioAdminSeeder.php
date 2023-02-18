<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    public function run()
    {
        $grupoModel = new \App\Models\GrupoModel();

        $grupos = [

            [
                // ID 1
                'nome' => 'Administrador',
                'exibir' => false, // 0
                'descricao' => 'Grupo com acesso total ao sistema',
            ],
            [
                // ID 2
                'nome' => 'UETP',
                'exibir' => false, // 0
                'descricao' => 'Acessa o sistema como UETP para visualizar os seus relatórios e informações.',
            ],
            [
                // ID 3
                'nome' => 'Professor',
                'exibir' => true, // 0
                'descricao' => 'Acessa as áreas de cursos, gerencia suas disciplinas e seus alunos.',
            ],
            [
                // ID 4
                'nome' => 'Aluno',
                'exibir' => true, // 0
                'descricao' => 'Acessa as áreas de seus cursos e suas disciplinas.',
            ],
            [
                // ID 5
                'nome' => 'Secretaria',
                'exibir' => true, // 0
                'descricao' => 'Gerencia professores, alunos e cursos.',
            ],

        ];

        foreach ($grupos as $grupo) {
            $grupoModel->skipValidation(true)->protect(false)->insert($grupo);
        }


        // Segunda parte.... criamos o usuário admin


        $usuarioModel = new \App\Models\UsuarioModel();

        $usuario = [
            'nome' => 'SEEC Admin',
            'local' => 'Belém',
            'login' => 'admin',
            'email' => 'admin@seecpa.com.br',
            'password' => 'admin123456',
            'ativo' => true,
            'admin' => true,
        ];

        $usuarioModel->skipValidation(true)->protect(false)->insert($usuario);


        // Terceira parte.... inserimos o usuário no grupo de administrador

        $grupoUsuarioModel = new \App\Models\GrupoUsuarioModel();


        $grupoUsuario = [
            'grupo_id' => 1,
            'usuario_id' => $usuarioModel->getInsertID(),
        ];

        $grupoUsuarioModel->protect(false)->insert($grupoUsuario);


        echo 'Usuario admin semeado com sucesso!';
    }
}

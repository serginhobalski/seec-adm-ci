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
                'nome' => 'Administrador',
                'exibir' => false, // 0
                'descricao' => 'Grupo com acesso total ao sistema', // false
            ],
            [
                'nome' => 'UETP',
                'exibir' => false, // 0
                'descricao' => 'Acessa o sistema como UETP para visualizar os seus relatórios e informações.', // false
            ],
            [
                'nome' => 'Professor',
                'exibir' => true, // 0
                'descricao' => 'Acessa as áreas de cursos, gerencia suas disciplinas e seus alunos.', // false
            ],
            [
                'nome' => 'Aluno',
                'exibir' => true, // 0
                'descricao' => 'Acessa as áreas de seus cursos e suas disciplinas.', // false
            ],

        ];

        foreach ($grupos as $grupo) {
            $grupoModel->skipValidation(true)->protect(false)->insert($grupo);
        }


        // Segunda parte.... criamos o usuário admin


        $usuarioModel = new \App\Models\UsuarioModel();

        $usuario = [
            'nome' => 'Usuario admin',
            'local' => 'Belém',
            'login' => 'admin',
            'email' => 'admin@admin.com',
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
    // public function run()
    // {
    //     $usuarios = [
    //         [
    //             'nome' => 'Administrador',
    //             'local' => 'Belém',
    //             'login' => 'admin',
    //             'ativo' => 1,
    //             'admin' => 1,
    //             'password' => 'serele21',
    //             'criado_em' => '2022-11-09 15:51:22',
    //         ],
    //         [
    //             'nome' => 'Eurides',
    //             'local' => 'Ananindeua',
    //             'login' => 'eurides',
    //             'ativo' => 1,
    //             'admin' => 1,
    //             'password' => 'sereu123456',
    //             'criado_em' => '2022-11-09 15:52:01',
    //         ]
    //     ];

    //     foreach ($usuarios as $usuario) {
    //         // Simple Queries
    //         $this->db->query('INSERT INTO usuarios (nome, local, login, ativo, admin, password_hash, criado_em) VALUES(:nome:, :local:, :login:, :ativo:, :admin:, :password:, :criado_em:)', $usuario);
    //     }
    // }
}

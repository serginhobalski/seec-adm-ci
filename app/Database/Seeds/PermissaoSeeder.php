<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PermissaoSeeder extends Seeder
{
    public function run()
    {
        $permissaoModel = new \App\Models\PermissaoModel();

        $permissoes = [
            //-------------Usuários---------------/
            [
                'nome' => 'listar-usuarios',
            ],
            [
                'nome' => 'criar-usuarios',
            ],
            [
                'nome' => 'editar-usuarios',
            ],
            [
                'nome' => 'deletar-usuarios',
            ],
            //-------------Relatórios---------------/
            [
                'nome' => 'listar-relatorio',
            ],
            [
                'nome' => 'criar-relatorio',
            ],
            [
                'nome' => 'editar-relatorio',
            ],
            [
                'nome' => 'deletar-relatorio',
            ],
            //-------------Cursos---------------/
            [
                'nome' => 'listar-curso',
            ],
            [
                'nome' => 'criar-curso',
            ],
            [
                'nome' => 'editar-curso',
            ],
            [
                'nome' => 'deletar-curso',
            ],
            //-------------Aulas---------------/
            [
                'nome' => 'listar-aula',
            ],
            [
                'nome' => 'criar-aula',
            ],
            [
                'nome' => 'editar-aula',
            ],
            [
                'nome' => 'deletar-aula',
            ],
            //-------------Alunos---------------/
            [
                'nome' => 'listar-aluno',
            ],
            [
                'nome' => 'criar-aluno',
            ],
            [
                'nome' => 'editar-aluno',
            ],
            [
                'nome' => 'deletar-aluno',
            ],
            //-------------Professor---------------/
            [
                'nome' => 'listar-professor',
            ],
            [
                'nome' => 'criar-professor',
            ],
            [
                'nome' => 'editar-professor',
            ],
            [
                'nome' => 'deletar-professor',
            ],
        ];

        foreach ($permissoes as $permissao) {
            // Simple Queries
            // $this->db->query('INSERT INTO permissoes (nome) VALUES(:nome:)', $permissao);
            $permissaoModel->protect(false)->insert($permissao);
        }

        echo 'Permissões criadas com sucesso!';
    }
}

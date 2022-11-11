<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GrupoSeeder extends Seeder
{
    public function run()
    {
        $grupos = [
            [
                'nome' => 'Administrador',
                'descricao' => 'Possui acesso total ao sistema',
                'exibir' => 1,
            ],
            [
                'nome' => 'UETP',
                'descricao' => 'Possui acesso a áreas destinadas a gestores de UETPs.',
                'exibir' => 1,
            ],
            [
                'nome' => 'Professor',
                'descricao' => 'Possui acesso ao gerenciamento de alunos e cursos específicos.',
                'exibir' => 1,
            ],
            [
                'nome' => 'Aluno',
                'descricao' => 'Possui acesso ao conteúdo de cursos específicos.',
                'exibir' => 1,
            ],

        ];

        foreach ($grupos as $grupo) {
            // Simple Queries
            $this->db->query('INSERT INTO grupos (nome, descricao, exibir) VALUES(:nome:, :descricao:, :exibir:)', $grupo);
        }
    }
}

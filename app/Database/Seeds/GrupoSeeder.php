<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GrupoSeeder extends Seeder
{
    public function run()
    {
        $grupoModel = new \App\Models\GrupoModel();

        $grupos = [
            [
                // Grupo ID 1
                'nome' => 'Administrador',
                'descricao' => 'Possui acesso total ao sistema',
                'exibir' => false,
            ],
            [
                // Grupo ID 2
                'nome' => 'UETP',
                'descricao' => 'Possui acesso a áreas destinadas a gestores de UETPs.',
                'exibir' => false,
            ],
            [
                'nome' => 'Professor',
                'descricao' => 'Possui acesso ao gerenciamento de alunos e cursos específicos.',
                'exibir' => true,
            ],
            [
                'nome' => 'Aluno',
                'descricao' => 'Possui acesso ao conteúdo de cursos específicos.',
                'exibir' => true,
            ],

        ];

        foreach ($grupos as $grupo) {
            // Simple Queries
            // $this->db->query('INSERT INTO grupos (nome, descricao, exibir) VALUES(:nome:, :descricao:, :exibir:)', $grupo);
            $grupoModel->insert($grupo);

            echo "Grupos inseridos com sucesso!";
        }
    }
}

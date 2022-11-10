<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    public function run()
    {
        $usuarios = [
            [
                'nome' => 'Administrador',
                'local' => 'Belém',
                'login' => 'admin',
                'ativo' => 1,
                'admin' => 1,
                'password' => 'serele21',
                'criado_em' => '2022-11-09 15:51:22',
            ],
            [
                'nome' => 'Eurides',
                'local' => 'Ananindeua',
                'login' => 'eurides',
                'ativo' => 1,
                'admin' => 1,
                'password' => 'sereu123456',
                'criado_em' => '2022-11-09 15:52:01',
            ]
        ];

        foreach ($usuarios as $usuario) {
            // Simple Queries
            $this->db->query('INSERT INTO usuarios (nome, local, login, ativo, admin, password_hash, criado_em) VALUES(:nome:, :local:, :login:, :ativo:, :admin:, :password:, :criado_em:)', $usuario);
        }
    }
}

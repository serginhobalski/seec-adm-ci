<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RelatorioSeeder extends Seeder
{
    public function run()
    {
        $relatorios = [
            [
                'nome' => 'ITQ/PA/01',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/02',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/03',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/04',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/05',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/06',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/07',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/08',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/09',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/10',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/11',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/12',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/13',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/14',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/15',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/16',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/17',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/18',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/19',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/20',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/21',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/22',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ITQ/PA/23',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 100,
            ],
            [
                'nome' => 'ADMIN',
                'local'    => 'Belém',
                'mes'    => 'OUTUBRO',
                'ano'    => '2022',
                'valor'    => 101,
            ],
        ];

        foreach ($relatorios as $relatorio) {
            // Simple Queries
            $this->db->query('INSERT INTO relatorios (nome, local, mes, ano, valor) VALUES(:nome:, :local:, :mes:, :ano:, :valor:)', $relatorio);
        }
    }
}

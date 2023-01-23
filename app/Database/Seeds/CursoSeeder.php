<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CursoSeeder extends Seeder
{
    public function run()
    {
        $cursoModel = new \App\Models\CursoModel();

        $cursos = [
            [
                // ID: 1
                'nome' => 'ITQ 1º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 280.00,
                'ativo' => true,
                'categoria' => 'itq',
            ],
            [
                // ID: 2
                'nome' => 'ITQ 1º Ano - Módulo 02',
                'descricao' => 'Módulo 02 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 3
                'nome' => 'ITQ 1º Ano - Módulo 03',
                'descricao' => 'Módulo 03 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 4
                'nome' => 'ITQ 1º Ano - Módulo 04',
                'descricao' => 'Módulo 04 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 5
                'nome' => 'ITQ 1º Ano - Módulo 05',
                'descricao' => 'Módulo 05 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 6
                'nome' => 'ITQ 1º Ano - Módulo 06',
                'descricao' => 'Módulo 06 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 7
                'nome' => 'ITQ 2º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 280.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 8
                'nome' => 'ITQ 2º Ano - Módulo 02',
                'descricao' => 'Módulo 02 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 9
                'nome' => 'ITQ 2º Ano - Módulo 03',
                'descricao' => 'Módulo 03 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 10
                'nome' => 'ITQ 2º Ano - Módulo 04',
                'descricao' => 'Módulo 04 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 11
                'nome' => 'ITQ 2º Ano - Módulo 05',
                'descricao' => 'Módulo 05 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 12
                'nome' => 'ITQ 2º Ano - Módulo 06',
                'descricao' => 'Módulo 06 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 13
                'nome' => 'ITQ 3º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 280.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 14
                'nome' => 'ITQ 3º Ano - Módulo 02',
                'descricao' => 'Módulo 02 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 15
                'nome' => 'ITQ 3º Ano - Módulo 03',
                'descricao' => 'Módulo 03 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 16
                'nome' => 'ITQ 3º Ano - Módulo 04',
                'descricao' => 'Módulo 04 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 17
                'nome' => 'ITQ 3º Ano - Módulo 05',
                'descricao' => 'Módulo 05 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 18
                'nome' => 'ITQ 3º Ano - Módulo 06',
                'descricao' => 'Módulo 06 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 250.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                // ID: 19
                'nome' => 'Curso de Postulantes - 2023',
                'descricao' => 'Curso preparatório para postulantes ao ingresso ou progressão ministerial na Igreja do Evangelho Quadrangular.',
                'valor' => 150.00,
                'ativo' => false, // 0
                'categoria' => 'postulantes',
            ],
            [
                // ID: 20
                'nome' => 'Alinhando-se com o céu',
                'descricao' => 'Capacitação ministerial',
                'valor' => 50.00,
                'ativo' => false, // 0
                'categoria' => 'ministerial',
            ],
            [
                // ID: 21
                'nome' => 'Escola de servos',
                'descricao' => 'Capacitação ministerial',
                'valor' => 50.00,
                'ativo' => false, // 0
                'categoria' => 'ministerial',
            ],
        ];

        foreach ($cursos as $curso) {
            $cursoModel->skipValidation(true)->protect(false)->insert($curso);
        }

        echo 'Cursos semeados com sucesso!';
    }
}

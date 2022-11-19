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
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 260.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 04 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 05 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 1º Ano - Módulo 01',
                'descricao' => 'Módulo 06 do 1º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 260.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 04 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 05 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 2º Ano - Módulo 01',
                'descricao' => 'Módulo 06 do 2º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 01 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 260.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 02 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 04 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 05 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'ITQ EAD - 3º Ano - Módulo 01',
                'descricao' => 'Módulo 06 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 220.00, // 1
                'ativo' => true, // 1
                'categoria' => 'itq',
            ],
            [
                'nome' => 'Curso de Postulantes - 2023',
                'descricao' => 'Módulo 06 do 3º ano do Instituto Teológico Quadrangular EAD',
                'valor' => 150.00,
                'ativo' => false, // 0
                'categoria' => 'postulantes',
            ],
        ];

        foreach ($cursos as $curso) {
            $cursoModel->skipValidation(true)->protect(false)->insert($curso);
        }

        echo 'Cursos semeados com sucesso!';
    }
}

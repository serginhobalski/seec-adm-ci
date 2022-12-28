<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DisciplinaCursoSeeder extends Seeder
{
    public function run()
    {
        $disciplinaModel = new \App\Models\CursoDisciplinaModel();

        $disciplinas = [
            [
                'curso_id' => 1,
                'disciplina_id' => 1,
            ],
            [
                'curso_id' => 1,
                'disciplina_id' => 2,
            ],
            [
                'curso_id' => 1,
                'disciplina_id' => 3,
            ],
            [
                'curso_id' => 1,
                'disciplina_id' => 4,
            ],
            [
                'curso_id' => 2,
                'disciplina_id' => 5,
            ],
            [
                'curso_id' => 2,
                'disciplina_id' => 6,
            ],
            [
                'curso_id' => 2,
                'disciplina_id' => 7,
            ],
            [
                'curso_id' => 3,
                'disciplina_id' => 8,
            ],
            [
                'curso_id' => 3,
                'disciplina_id' => 9,
            ],
            [
                'curso_id' => 3,
                'disciplina_id' => 10,
            ],
            [
                'curso_id' => 3,
                'disciplina_id' => 11,
            ],
            [
                'curso_id' => 4,
                'disciplina_id' => 12,
            ],
            [
                'curso_id' => 4,
                'disciplina_id' => 13,
            ],
            [
                'curso_id' => 4,
                'disciplina_id' => 14,
            ],
            [
                'curso_id' => 5,
                'disciplina_id' => 15,
            ],
            [
                'curso_id' => 5,
                'disciplina_id' => 16,
            ],
            [
                'curso_id' => 5,
                'disciplina_id' => 17,
            ],
            [
                'curso_id' => 6,
                'disciplina_id' => 18,
            ],
            [
                'curso_id' => 6,
                'disciplina_id' => 19,
            ],
            [
                'curso_id' => 6,
                'disciplina_id' => 20,
            ],
            [
                'curso_id' => 7,
                'disciplina_id' => 21,
            ],
            [
                'curso_id' => 7,
                'disciplina_id' => 22,
            ],
            [
                'curso_id' => 7,
                'disciplina_id' => 23,
            ],
            [
                'curso_id' => 8,
                'disciplina_id' => 24,
            ],
            [
                'curso_id' => 8,
                'disciplina_id' => 25,
            ],
            [
                'curso_id' => 8,
                'disciplina_id' => 26,
            ],
            [
                'curso_id' => 9,
                'disciplina_id' => 27,
            ],
            [
                'curso_id' => 9,
                'disciplina_id' => 28,
            ],
            [
                'curso_id' => 9,
                'disciplina_id' => 29,
            ],
            [
                'curso_id' => 10,
                'disciplina_id' => 30,
            ],
            [
                'curso_id' => 10,
                'disciplina_id' => 31,
            ],
            [
                'curso_id' => 10,
                'disciplina_id' => 32,
            ],
            [
                'curso_id' => 11,
                'disciplina_id' => 33,
            ],
            [
                'curso_id' => 11,
                'disciplina_id' => 34,
            ],
            [
                'curso_id' => 11,
                'disciplina_id' => 35,
            ],
            [
                'curso_id' => 12,
                'disciplina_id' => 36,
            ],
            [
                'curso_id' => 12,
                'disciplina_id' => 37,
            ],
            [
                'curso_id' => 12,
                'disciplina_id' => 38,
            ],
            [
                'curso_id' => 13,
                'disciplina_id' => 39,
            ],
            [
                'curso_id' => 13,
                'disciplina_id' => 40,
            ],
            [
                'curso_id' => 13,
                'disciplina_id' => 41,
            ],
            [
                'curso_id' => 14,
                'disciplina_id' => 42,
            ],
            [
                'curso_id' => 14,
                'disciplina_id' => 43,
            ],
            [
                'curso_id' => 14,
                'disciplina_id' => 44,
            ],
            [
                'curso_id' => 15,
                'disciplina_id' => 45,
            ],
            [
                'curso_id' => 15,
                'disciplina_id' => 46,
            ],
            [
                'curso_id' => 15,
                'disciplina_id' => 47,
            ],
            [
                'curso_id' => 16,
                'disciplina_id' => 48,
            ],
            [
                'curso_id' => 16,
                'disciplina_id' => 49,
            ],
            [
                'curso_id' => 16,
                'disciplina_id' => 50,
            ],
            [
                'curso_id' => 17,
                'disciplina_id' => 51,
            ],
            [
                'curso_id' => 17,
                'disciplina_id' => 52,
            ],
            [
                'curso_id' => 17,
                'disciplina_id' => 53,
            ],
            [
                'curso_id' => 18,
                'disciplina_id' => 54,
            ],
            [
                'curso_id' => 18,
                'disciplina_id' => 55,
            ],
            [
                'curso_id' => 18,
                'disciplina_id' => 56,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 57,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 58,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 59,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 60,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 61,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 62,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 63,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 64,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 65,
            ],
            [
                'curso_id' => 19,
                'disciplina_id' => 66,
            ],
        ];

        foreach ($disciplinas as $disciplina) {
            $disciplinaModel->skipValidation(true)->protect(false)->insert($disciplina);
        }

        echo 'Disciplinas semeadas nos cursos com sucesso!';
    }
}

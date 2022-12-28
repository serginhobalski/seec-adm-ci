<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DisciplinasSeeder extends Seeder
{
    public function run()
    {
        $disciplinaModel = new \App\Models\DisciplinaModel();

        $disciplinas = [
            [
                // ID: 1
                'nome' => 'Vivência Cristã',
                'descricao' => 'Disciplina do Módulo 1 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 2
                'nome' => 'Bibliologia',
                'descricao' => 'Disciplina do Módulo 1 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 3
                'nome' => 'Introdução à Teologia',
                'descricao' => 'Disciplina do Módulo 1 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 4
                'nome' => 'Metodologia do Trabalho Acadêmico',
                'descricao' => 'Disciplina do Módulo 1 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 5
                'nome' => 'Vida de Cristo e Espiritualidade',
                'descricao' => 'Disciplina do Módulo 2 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 6
                'nome' => 'Dons e Ministérios',
                'descricao' => 'Disciplina do Módulo 2 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 7
                'nome' => 'Pastoral Urbana',
                'descricao' => 'Disciplina do Módulo 2 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 8
                'nome' => 'Evangelho Quadrangular',
                'descricao' => 'Disciplina do Módulo 3 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 9
                'nome' => 'Disciplulado',
                'descricao' => 'Disciplina do Módulo 3 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 10
                'nome' => 'Evangelismo',
                'descricao' => 'Disciplina do Módulo 3 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 11
                'nome' => 'Cidadania',
                'descricao' => 'Disciplina do Módulo 3 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 12
                'nome' => 'Introdução à Educação Cristã',
                'descricao' => 'Disciplina do Módulo 4 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 13
                'nome' => 'Hermenêutica',
                'descricao' => 'Disciplina do Módulo 4 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 14
                'nome' => 'Administração Eclesiástica',
                'descricao' => 'Disciplina do Módulo 4 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 15
                'nome' => 'Aconselhamento e Orientação Familiar',
                'descricao' => 'Disciplina do Módulo 5 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 16
                'nome' => 'Homilética',
                'descricao' => 'Disciplina do Módulo 5 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 17
                'nome' => 'Métodos de Estudo Bíblico',
                'descricao' => 'Disciplina do Módulo 5 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 18
                'nome' => 'Teologia do Culto',
                'descricao' => 'Disciplina do Módulo 6 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 19
                'nome' => 'Liderança 1 - Gestão Pessoal',
                'descricao' => 'Disciplina do Módulo 6 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 20
                'nome' => 'Teologia Pastoral',
                'descricao' => 'Disciplina do Módulo 6 do 1º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 21
                'nome' => 'Cultura Bíblica',
                'descricao' => 'Disciplina do Módulo 1 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 22
                'nome' => 'Pentateuco (parte 1)',
                'descricao' => 'Disciplina do Módulo 1 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 23
                'nome' => 'Teologia do Antigo Testamento',
                'descricao' => 'Disciplina do Módulo 1 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 24
                'nome' => 'Teologia do Novo Testamento',
                'descricao' => 'Disciplina do Módulo 2 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 25
                'nome' => 'Hebreus',
                'descricao' => 'Disciplina do Módulo 2 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 26
                'nome' => 'Pentateuco (parte 2)',
                'descricao' => 'Disciplina do Módulo 2 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 27
                'nome' => 'Evangelhos (parte 1)',
                'descricao' => 'Disciplina do Módulo 3 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 28
                'nome' => 'Atos dos Apóstolos',
                'descricao' => 'Disciplina do Módulo 3 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 29
                'nome' => 'História de Israel (parte 1)',
                'descricao' => 'Disciplina do Módulo 3 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 30
                'nome' => 'História de Israel (parte 2)',
                'descricao' => 'Disciplina do Módulo 4 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 31
                'nome' => 'Evangelhos (parte 2)',
                'descricao' => 'Disciplina do Módulo 4 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 32
                'nome' => 'Epístolas Paulinas (parte 1)',
                'descricao' => 'Disciplina do Módulo 4 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 33
                'nome' => 'História de Israel (parte 3)',
                'descricao' => 'Disciplina do Módulo 5 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 34
                'nome' => 'Epístolas Paulinas (parte 2)',
                'descricao' => 'Disciplina do Módulo 5 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 35
                'nome' => 'Epístolas Gerais',
                'descricao' => 'Disciplina do Módulo 5 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 36
                'nome' => 'Livros Poéticos',
                'descricao' => 'Disciplina do Módulo 6 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 37
                'nome' => 'Missão Integral da Igreja',
                'descricao' => 'Disciplina do Módulo 6 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 38
                'nome' => 'Teologia Sistemática I',
                'descricao' => 'Disciplina do Módulo 6 do 2º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 39
                'nome' => 'TCC - Trabalho de Conclusão de Curso',
                'descricao' => 'Disciplina do Módulo 1 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 40
                'nome' => 'Estágio Supervisionado',
                'descricao' => 'Disciplina do Módulo 1 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 41
                'nome' => 'Teologia Sistemática II (parte 1)',
                'descricao' => 'Disciplina do Módulo 1 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 42
                'nome' => 'Teologia Sistemática II (parte 2)',
                'descricao' => 'Disciplina do Módulo 2 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 43
                'nome' => 'História da Igreja (parte 1)',
                'descricao' => 'Disciplina do Módulo 2 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 44
                'nome' => 'Aconselhamento Pastoral',
                'descricao' => 'Disciplina do Módulo 2 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 45
                'nome' => 'Escatologia Bíblica (parte 1)',
                'descricao' => 'Disciplina do Módulo 3 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 46
                'nome' => 'Teologia Sistemática III (parte 1)',
                'descricao' => 'Disciplina do Módulo 3 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 47
                'nome' => 'História da Igreja (parte 2)',
                'descricao' => 'Disciplina do Módulo 3 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 48
                'nome' => 'Teologia Sistemática III (parte 2)',
                'descricao' => 'Disciplina do Módulo 4 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 49
                'nome' => 'Escatologia Bíblica (parte 2)',
                'descricao' => 'Disciplina do Módulo 4 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 50
                'nome' => 'Liderança II - Gestão Ministerial',
                'descricao' => 'Disciplina do Módulo 4 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 51
                'nome' => 'Introdução à Missiologia',
                'descricao' => 'Disciplina do Módulo 5 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 52
                'nome' => 'Movimentos Religiosos Contemporâneos',
                'descricao' => 'Disciplina do Módulo 5 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 53
                'nome' => '',
                'descricao' => 'Disciplina do Módulo 5 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 54
                'nome' => 'Comunicação Social',
                'descricao' => 'Disciplina do Módulo 6 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 55
                'nome' => 'Teologia Contemporânea',
                'descricao' => 'Disciplina do Módulo 6 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [    // ID: 56
                'nome' => 'Ética Cristã',
                'descricao' => 'Disciplina do Módulo 6 do 3º ano do Instituto Teológico Quadrangular EAD',
            ],
            [
                // ID: 57
                'nome' => 'Introdução Geral',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 58
                'nome' => 'Doutrinas Bíblicas',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 59
                'nome' => 'Declaração de Fé',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 60
                'nome' => 'Evangelho Quadrangular',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 61
                'nome' => 'Panorama Bíblico',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 62
                'nome' => 'Ética e Cidadania',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 63
                'nome' => 'Administração da Igreja',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 64
                'nome' => 'Células e Plantação de Igrejas',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 65
                'nome' => 'Atualidades',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
            [
                // ID: 66
                'nome' => 'Leitura Obrigatória e Redação',
                'descricao' => 'Disciplina integrante do Curso de Postulantes',
            ],
        ];

        foreach ($disciplinas as $disciplina) {
            $disciplinaModel->skipValidation(true)->protect(false)->insert($disciplina);
        }

        echo 'Disciplinas semeadas com sucesso!';
    }
}

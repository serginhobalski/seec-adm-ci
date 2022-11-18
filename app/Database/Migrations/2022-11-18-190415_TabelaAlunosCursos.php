<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaAlunosCursos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'curso_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'aluno_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('curso_id', 'cursos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('aluno_id', 'usuarios', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('alunos_cursos');
    }

    public function down()
    {
        $this->forge->dropTable('alunos_cursos');
    }
}

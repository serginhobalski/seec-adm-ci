<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaCursoDisciplinas extends Migration
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
            'disciplina_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('curso_id', 'cursos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('disciplina_id', 'disciplinas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('curso_disciplinas');
    }

    public function down()
    {
        $this->forge->dropTable('curso_disciplinas');
    }
}

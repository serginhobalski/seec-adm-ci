<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaProfessoresCursos extends Migration
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
            'professor_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('curso_id', 'cursos', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('professor_id', 'usuarios', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('professores_cursos');
    }

    public function down()
    {
        $this->forge->dropTable('professores_cursos');
    }
}

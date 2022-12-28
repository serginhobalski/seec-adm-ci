<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaAulasDisciplinas extends Migration
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
            'disciplina_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'aula_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('disciplina_id', 'disciplinas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('aula_id', 'aulas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('aulas_disciplinas');
    }

    public function down()
    {
        $this->forge->dropTable('aulas_disciplinas');
    }
}

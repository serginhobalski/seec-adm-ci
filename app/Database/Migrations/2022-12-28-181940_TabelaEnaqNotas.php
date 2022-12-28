<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaEnaqNotas extends Migration
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
            'ano' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'local' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
                'default' => null,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'categoria' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'prova' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'redacao' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'media' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'criado_em' => [
                'type'       => 'TIMESTAMP',
            ],
            'alterado_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'deletado_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('enaq_notas');
    }

    public function down()
    {
        $this->forge->dropTable('enaq_notas');
    }
}

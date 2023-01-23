<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaEventos extends Migration
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
            'titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'descricao' => [
                'type'       => 'VARCHAR',
                'constraint' => '240',
            ],
            'detalhes' => [
                'type'       => 'TEXT',
            ],
            'tipo' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'inicio' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'inicio' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
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

        $this->forge->createTable('eventos');
    }

    public function down()
    {
        $this->forge->dropTable('eventos');
    }
}

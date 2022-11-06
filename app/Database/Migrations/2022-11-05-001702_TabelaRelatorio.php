<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaRelatorio extends Migration
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
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'local' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mes' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'ano' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'valor' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'comprovante' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'relatorio' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'obs' => [
                'type'       => 'TEXT',
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
        $this->forge->createTable('relatorios');
    }

    public function down()
    {
        $this->forge->dropTable('relatorios');
    }
}

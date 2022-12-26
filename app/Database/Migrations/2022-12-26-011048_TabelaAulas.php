<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaAulas extends Migration
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
                'type'       => 'TEXT',
                'null' => true,
                'default' => null,
            ],
            'recurso' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
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
        $this->forge->createTable('aulas');
    }

    public function down()
    {
        $this->forge->dropTable('aulas');
    }
}

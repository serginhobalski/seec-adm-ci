<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaAvisos extends Migration
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
            'aviso' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'icone' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],            
            'detalhes' => [
                'type'       => 'TEXT',
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

        $this->forge->createTable('avisos');
    }

    public function down()
    {
        $this->forge->dropTable('avisos');
    }
}

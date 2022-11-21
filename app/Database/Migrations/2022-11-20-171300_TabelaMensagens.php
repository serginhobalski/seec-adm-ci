<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaMensagens extends Migration
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
            'destinatario' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'assunto' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'mensagem' => [
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
        $this->forge->createTable('mensagens');
    }

    public function down()
    {
        $this->forge->dropTable('mensagens');
    }
}

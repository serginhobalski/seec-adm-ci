<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaMensagensUsuarios extends Migration
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
            'mensagem_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'usuario_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('mensagem_id', 'mensagens', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('usuario_id', 'usuarios', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('mensagens_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('mensagens_usuarios');
    }
}

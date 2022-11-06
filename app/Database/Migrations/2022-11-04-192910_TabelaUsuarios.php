<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TabelaUsuarios extends Migration
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
                'type' => 'TEXT',
                'null' => true,
            ],
            'login' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'telefone' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'reset_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '250',
            ],
            'reset_expira_em' => [
                'type'       => 'DATETIME',
                'null' => true,
                'default' => null,
            ],
            'ativo' => [
                'type'       => 'BOOLEAN',
                'null' => true,
                'default' => true,
            ],
            'admin' => [
                'type'       => 'BOOLEAN',
                'null' => true,
                'default' => null,
            ],
            'imagem' => [
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
        $this->forge->createTable('usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Logins extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => [
                'type'           => 'INT',
                'constraint'     => 9,
                'usigned'        => true,
                'auto_increment' => true,
            ],
            
            'usuario'               => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
            ],
            
            'senha'               => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
            ],
            
            'primeiro_nome'               => [
                'type'           => 'VARCHAR',
                'constraint'     => 15,
            ],
            
            'created_at'=> [
                'type'  => 'DATETIME',
            ],
            
            'updated_at'=> [
                'type'  => 'DATETIME',
            ],

            'deleted_at'=> [
                'type'  => 'DATETIME',
            ],
                        
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('logins');
    }

    public function down()
    {
        $this->forge->dropTable('logins');
    }
}

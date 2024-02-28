<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
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
            
            'nome'               => [
                'type'           => 'VARCHAR',
                'constraint'     => 128,
            ],
            
            'descricao'    => [
                'type'  => 'VARCHAR',
                'constraint'     => 500,
            ],
            
            'quantidade'     => [
                'type'       => 'INT',
                'constraint' => 9
            ],
            
            'quantidade_minima' => [
                'type'          => 'INT',
                'constraint'    => 9
            ],
            
            'valor_de_compra' => [
                'type'        => 'DOUBLE',
            ],
            
            'valor_de_venda' => [
                'type'       => 'DOUBLE',
            ],
                        
            'margem_de_lucro'=> [
                'type'       => 'INT',
            ],
            
            'validade'=> [
                'type'  => 'DATE',
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
        $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}

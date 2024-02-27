<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Funcionarios extends Migration
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
            
            'data_de_nascimento'    => [
                'type'  => 'DATE',
            ],
            
            'rg'             => [
                'type'       => 'VARCHAR',
                'constraint' => 32
            ],
            
            'cpf'            => [
                'type'       => 'VARCHAR',
                'constraint' => 14
            ],
            
            'telefone'      => [
                'type'      => 'VARCHAR',
                'constraint'=> 32,
            ],
            'endereco'      => [
                'type'      => 'VARCHAR',
                'constraint'=> 128,
            ],
            
            'data_de_contratacao'=> [
                'type'           => 'DATE',
            ],
            
            'cargo'=> [
                'type'         => 'VARCHAR',
                'constraint'=> 128,
            ],
            
            'salario'=> [
                'type'         => 'DOUBLE',
            ],
            
            'dia_do_pagamento'=> [
                'type'         => 'INT',
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
        $this->forge->createTable('funcionarios');
    }

    public function down()
    {
        $this->forge->dropTable('funcionarios');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class FuncionarioModel extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nome',
        'data_de_nascimento',
        'rg',
        'cpf',
        'telefone',
        'endereco',
        'data_de_contratacao',
        'cargo',
        'salario',
        'dia_do_pagamento',
    ];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'funcionarios';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nome',
        'descricao',
        'quantidade',
        'quantidade_minima',
        'valor_de_compra',
        'valor_de_venda',
        'margem_de_lucro',
        'validade',
];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}

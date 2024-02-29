<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'logins';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'usuario',
        'senha',
        'primeiro_nome',
];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
}

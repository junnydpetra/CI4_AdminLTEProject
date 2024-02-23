<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Cliente extends BaseController
{
    public function new()
    {
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }
}

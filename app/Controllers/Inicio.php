<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Inicio extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('inicio/index');
        echo view('templates/footer');
    }
}

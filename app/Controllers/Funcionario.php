<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FuncionarioModel;

class Funcionario extends BaseController
{
    private $funcionario_model;

    function __construct()
    {
        $this->funcionario_model = new FuncionarioModel();
    }
    
    public function index()
    {
        $funcionarios = $this->funcionario_model->findAll();

        $data['funcionarios'] = $funcionarios;
        
        echo view('templates/header');
        echo view('funcionarios/index', $data);
        echo view('templates/footer');
    }
}

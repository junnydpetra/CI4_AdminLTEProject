<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClienteModel;
use App\Models\FuncionarioModel;
use App\Models\ProdutoModel;

class Inicio extends BaseController
{
    private $cliente_model;
    private $funcionario_model;
    private $produtio_model;

    function __construct() 
    {
        $this->cliente_model     = new ClienteModel();
        $this->funcionario_model = new FuncionarioModel();
        $this->produtio_model    = new ProdutoModel();
    }

    public function index()
    {
        $total_de_clientes = count(
            $this->cliente_model->findAll()
        );

        $total_de_funcionarios = count(
            $this->funcionario_model->findAll()
        );

        $total_de_produtos = count(
            $this->produtio_model->findAll()
        );

        $data['total_de_clientes']     = $total_de_clientes;
        $data['total_de_funcionarios'] = $total_de_funcionarios;
        $data['total_de_produtos']     = $total_de_produtos;

        echo view('templates/header');
        echo view('inicio/index', $data);
        echo view('templates/footer');
    }
}

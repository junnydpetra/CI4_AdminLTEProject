<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Controllers\BaseController;

class Cliente extends BaseController
{
    private $cliente_model;
    
    public function index()
    {
        $clientes = $this->cliente_model->findAll();

        $data['clientes'] = $clientes;
        
        echo view('templates/header');
        echo view('clientes/index', $data);
        echo view('templates/footer');
    }

    function __construct()
    {
        $this->cliente_model = new ClienteModel();
    }

    public function new()
    {
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        $this->cliente_model->insert($dados);

        return redirect()->to('/clientes/new');
    }
}

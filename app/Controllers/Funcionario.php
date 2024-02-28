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
        $data['funcionarios'] = $this->funcionario_model
                                     ->findAll();
        
        echo view('templates/header');
        echo view('funcionarios/index', $data);
        echo view('templates/footer');
    }
    
    public function new()
    {
        echo view('templates/header');
        echo view('funcionarios/novo');
        echo view('templates/footer');
    }
    
    public function store()
    {
        $dados = $this->request->getVar();

        if (isset($dados['cliente_id'])):

            $this->funcionario_model
                 ->where('id', $dados['cliente_id'])
                 ->set($dados)
                 ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("clientes");

        endif;

        $this->funcionario_model->insert($dados);
        
        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/clientes');
    }
}

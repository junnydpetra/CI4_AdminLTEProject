<?php

namespace App\Controllers;

use App\Models\ClienteModel;
use App\Controllers\BaseController;

class Cliente extends BaseController
{
    private $cliente_model;

    function __construct()
    {
        $this->cliente_model = new ClienteModel();
    }
    
    public function index()
    {
        $clientes = $this->cliente_model->findAll();

        $data['clientes'] = $clientes;
        
        echo view('templates/header');
        echo view('clientes/index', $data);
        echo view('templates/footer');
    }

    public function new()
    {
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
    }

    public function edit($cliente_id)
    {
        $cliente = $this->cliente_model
                        ->where('id', $cliente_id)
                        ->first();

        $data['cliente'] = $cliente;

        echo view('templates/header');
        echo view('clientes/editar', $data);
        echo view('templates/footer');
    }

    public function store()
    {
        $dados = $this->request->getVar();

        if (isset($dados['cliente_id'])):

            $this->cliente_model
                 ->where('id', $dados['cliente_id'])
                 ->set($dados)
                 ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("clientes");

        endif;

        $this->cliente_model->insert($dados);
        
        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/clientes');
    }

    public function delete($cliente_id)
    {
        $this->cliente_model
             ->where('id', $cliente_id)
             ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');

        return redirect()->to("clientes");
    }

    public function read($cliente_id)
    {
        $cliente = $this->cliente_model
                         ->where('id', $cliente_id)
                         ->first();

        $data['cliente'] = $cliente;
        
        echo view('templates/header');
        echo view('clientes/exibir', $data);
        echo view('templates/footer');
    }
}

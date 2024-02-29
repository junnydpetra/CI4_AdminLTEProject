<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    private $produto_model;

    function __construct()
    {
        $this->produto_model = new ProdutoModel();        
    }
    
    public function index()
    {
        $data['produtos'] = $this->produto_model
                                 ->findAll();
        // dd($data);
        echo view('templates/header');
        echo view('produtos/index', $data);
        echo view('templates/footer');
    }
    
    public function new()
    {
        echo view('templates/header');
        echo view('produtos/novo');
        echo view('templates/footer');
    }
    
    public function store()
    {
        $dados = $this->request->getVar();
        
        if (isset($dados['produto_id'])):

            $this->produto_model
                 ->where('id', $dados['produto_id'])
                 ->set($dados)
                 ->update();

            $session = session();
            $session->setFlashdata('alert', 'success_update');

            return redirect()->to("produtos");

        endif;

        $this->produto_model->insert($dados);
        
        $session = session();
        $session->setFlashdata('alert', 'success_create');

        return redirect()->to('/produtos');
    }
      
    public function edit($produto_id)
    {        
        $produto = $this->produto_model
                        ->where('id', $produto_id)
                        ->first();

        $data['produto'] = $produto;

        echo view('templates/header');
        echo view('produtos/editar', $data);
        echo view('templates/footer');
    }
    
    public function delete($produto_id)
    {
        $this->produto_model
             ->where('id', $produto_id)
             ->delete();

        $session = session();
        $session->setFlashdata('alert', 'success_delete');

        return redirect()->to('produtos');
    }
    
    public function read($produto_id)
    {
        $produto = $this->produto_model
                         ->where('id', $produto_id)
                         ->first();

        $data['produto'] = $produto;
        
        echo view('templates/header');
        echo view('produtos/exibir', $data);
        echo view('templates/footer');
    }
}

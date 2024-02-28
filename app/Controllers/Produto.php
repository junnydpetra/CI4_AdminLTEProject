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
}

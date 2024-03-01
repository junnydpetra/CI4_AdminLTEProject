<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LoginModel;
use CodeIgniter\Config\View;

class Login extends BaseController
{
    private $login_model;
    
    public function __construct() 
    {
        $this->login_model = new LoginModel();
    }

    public function index()
    {
        echo view('login/index.php');
    }

    public function authenticate()
    {
        $dados = $this->request->getVar();
        
        $usuario = $this->login_model
                        ->where('usuario', $dados['usuario'])
                        ->where('senha', md5($dados['senha']))
                        ->first();

        $session = session();

        if (!empty($usuario)) {
            $session->set('primeiro_nome', $usuario['primeiro_nome']);
            $session->setFlashdata('alert', [
                'type' => 'success',
                'message' => 'Login bem-sucedido!'
            ]);
            return redirect()->to('/inicio');
        } else {
            $session->setFlashdata('alert', [
                'type' => 'danger',
                'message' => 'Usuário ou senha incorretos!'
            ]);
            return redirect()->to('/login');
        }
    }


    
    
    public function logout()
    {
        $session = session();
        $session->destroy();
        
        return redirect()->to('login');
    }

    public function changePassword()
    {
        echo view('templates/header');
        echo view('login/change_password');
        echo view('templates/footer');
    }
    
    public function qualquer()
    {
        return 'teste!';
    }

    public function store()
    {
        $dados = $this->request->getVar();
        // dd(md5($dados['senha_atual']));
        $usuario = $this->login_model
                        ->where('id', 1)
                        ->first();
        
        $session = session();
        
        if(md5($dados['senha_atual']) == $usuario['senha']):

            if($dados['nova_senha'] == $dados['nova_senha_confirm']):
        
                $this->login_model
                    ->where('id', 1)
                    ->set('senha', md5($dados['nova_senha']))
                    ->update();

                $session->setFlashdata('alert', 'change_password_success');

                return redirect()->to('/login/change_password');
                
            endif;
            
        endif;
        
        $session->setFlashdata('alert', 'change_password_error');
    
        return redirect()->to('/login/change_password');
    }

}

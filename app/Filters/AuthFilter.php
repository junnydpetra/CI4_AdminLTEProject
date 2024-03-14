<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    /**
     * Método que será executado antes da requisição ser processada.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     * @return mixed
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();
    
        // Redirect to login page if user is not logged in
        if (!$session->has('primeiro_nome') && $request->uri->getSegment(1) !== 'login') {
            $alert = [
                'type' => 'warning',
                'message' => 'Você precisa estar logado para acessar esta página.'
            ];
            $session->setFlashdata('alert', $alert);
            return redirect()->to('/login');
        }
    
        if ($session->has('primeiro_nome') && $request->uri->getSegment(1) == 'login') {
            return redirect()->to('/inicio');
        }
    }


    

    /**
     * Método que será executado após a requisição ser processada.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     * @return mixed
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Não fazemos nada depois do acesso
    }

    /**
     * Método que será executado quando a aplicação é encerrada
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @return mixed
     */
    public function onFinish(RequestInterface $request, ResponseInterface $response)
    {
        // Não fazemos nada quando a aplicação é encerrada
    }
}
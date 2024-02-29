<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Config\View;

class Login extends BaseController
{
    public function index()
    {
        echo view('login/index.php');
    }
}

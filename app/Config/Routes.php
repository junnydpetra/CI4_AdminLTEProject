<?php

namespace Config;

use App\Controllers\Funcionario;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/* Clientes */
$routes->get('/', 'Home::index');
$routes->get('/inicio', 'Inicio::index');
$routes->get('/clientes', 'Cliente::index');
$routes->get('/clientes/new', 'Cliente::new');
$routes->get('/clientes/edit/(:num)', 'Cliente::edit/$1');
$routes->get('/clientes/read/(:num)', 'Cliente::read/$1');

$routes->post('/clientes/store', 'Cliente::store');
$routes->add('/clientes/delete/(:num)', 'Cliente::delete/$1', ['as' => 'delete_cliente']);

/* Funcionários */
$routes->get('/funcionarios', 'Funcionario::index');
$routes->get('/funcionarios/new', 'Funcionario::new');
$routes->get('/funcionarios/edit/(:num)', 'Funcionario::edit/$1');
$routes->get('/funcionarios/read/(:num)', 'Funcionario::read/$1');

$routes->post('/funcionarios/store', 'Funcionario::store');
$routes->add('funcionarios/delete/(:num)', 'Funcionario::delete/$1', ['as' => 'delete_funcionario']);

/* Produtos */
$routes->get('/produtos', 'Produto::index');
$routes->get('/produtos/new', 'Produto::new');
$routes->get('/produtos/edit/(:num)', 'Produto::edit/$1');
$routes->get('/produtos/read/(:num)', 'Produto::read/$1');

$routes->post('/produtos/store', 'Produto::store');
$routes->add('produtos/delete/(:num)', 'Produto::delete/$1', ['as' => 'delete_produto']);

/* Logins */
$routes->get('/login', 'Login::index');
$routes->get('/logout', 'Login::logout');
$routes->get('/login/change_password', 'Login::changePassword');

$routes->post('/login/store', 'Login::store');
$routes->post('/login/authenticate', 'Login::authenticate');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

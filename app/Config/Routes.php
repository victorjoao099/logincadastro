<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Login (Somente entra na página)
$routes->get('login', 'login::login', ['as' => 'login.login']);

// Coloca os dados e entra no sistema
$routes->post('login', 'login::entrar', ['as' => 'login.entrar']);


// Cadastro (somente entra na página)
$routes->get('cadastro', 'cadastro::cadastro', ['as' => 'cadastro.cadastro']);

// Cadastro (Cadastrar usuario)
$routes->post('cadastro', 'cadastro::index', ['as' => 'cadastrar.cadastro']);


// Rota logout
$routes->get('pagInicial', 'paginicial::index', ['as' => 'inicial.index', 'filter' => 'auth']);

$routes->get('logout', 'logout::destroy', ['as' => 'logout.destroy']);


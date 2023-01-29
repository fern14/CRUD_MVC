<?php

use core\Router;

$router = new Router();

// para criar uma rota

// primeiro parametro: caminho, segundo: o nome do controler @ o metodo dentro do controller
$router->get('/', 'HomeController@index');
// criando rota dinamica
// $router->get('/foto/{id}', 'HomeController@foto');

$router->get('/novo', 'UsuariosController@add');
$router->post('/novo', 'UsuariosController@addAction');

$router->get('/usuario/{id}/editar', 'UsuariosController@edit');
$router->post('/usuario/{id}/editar', 'UsuariosController@editAction');

$router->get('/usuario/{id}/excluir', 'UsuariosController@del');

<?php

namespace src\controllers;

use \core\Controller;
// chamando um model dentro do controller
use \src\models\Usuario;

class HomeController extends Controller
{
    // nome dos metodos dentro do controller
    public function index()
    {
        $usuarios = Usuario::select()->execute();

        $this->render('home', [
            'usuarios' => $usuarios
        ]);
    }

    // public function fotos()
    // {
    //     $this->render('fotos');
    // }

    // // rota dinamica
    // public function foto($parametros)
    // {
    //     echo 'Acessando a foto: ' . $parametros['id'];
    // }

}

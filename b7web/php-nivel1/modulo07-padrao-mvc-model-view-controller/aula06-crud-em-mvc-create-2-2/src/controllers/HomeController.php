<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index()
    {
        $nome = "Roger";

        $posts = [
            ['titulo' => 'Titulo 1', 'corpo' => 'Corpo 1'],
            ['titulo' => 'Titulo 2', 'corpo' => 'Corpo 2'],
            ['titulo' => 'Titulo 3', 'corpo' => 'Corpo 3'],
        ];

        $this->render('home', [
            'nome' => $nome,
            'idade' => 30,
            'posts' => $posts
        ]);
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }

    public function fotos()
    {
        $this->render('fotos');
    }

    public function foto($arg)
    {
        print_r($arg);
    }
}
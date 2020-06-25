<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index()
    {
        $this->render('home', ['nome' => 'Bonieky']);
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
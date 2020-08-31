<?php


class HomeController extends Controller
{
    public function index()
    {
        $dados = [
            'quantidade' => 5,
            'name' => 'Rogerio'
        ];

       $this->loadTemplate('home', $dados);
    }
}
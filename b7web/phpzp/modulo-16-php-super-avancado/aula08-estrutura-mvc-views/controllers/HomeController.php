<?php


class HomeController extends Controller
{
    public function index()
    {
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        $dados = [
            'quantidade' => $anuncios->getQuantidade(),
            'name' => $usuarios->getNome()
        ];

       $this->loadTemplate('home', $dados);
    }
}
<?php


class HomeController extends Controller
{
    public function index()
    {
       $dados = [];

        $a = new Anuncios();
        $u = new Usuarios();
        $c = new Categorias();

        $filtros = [
            'categoria'=>'',
            'preco' => '',
            'estado' => ''
        ];

        if(isset($_GET['filtros'])){
            $filtros = $_GET['filtros'];
        }

        $total_anuncios = $a->getTotalAnuncios($filtros);
        $total_usuarios = $u->getTotalUsuarios();

        $por_pagina = 2;

        $p = 1;
        if(isset($_GET['p'])){
            $p = $_GET['p'];
        }

        $total_paginas = ceil($total_anuncios / $por_pagina);

        $anuncios = $a->getUltimosAnuncios($p, $por_pagina, $filtros);

        $categorias = $c->getLista();

        $dados['total_anuncios'] = $total_anuncios;
        $dados['total_usuarios'] = $total_usuarios;
        $dados['categorias'] = $categorias;
        $dados['filtros'] = $filtros;
        $dados['anuncios'] = $anuncios;
        $dados['total_paginas'] = $total_paginas;

       $this->loadTemplate('home', $dados);
    }
}
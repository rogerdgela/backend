<?php
include 'header.php';

$p = 'home';

if(!empty($_GET['p'])){
    $pagina = $_GET['p'];
    if(strpos($pagina,'.') === false){
        if(file_exists('paginas/'.$pagina.'.php')){
           $p = $pagina;
        }
    }
}

/*if(!empty($_GET['p'])){
    require 'paginas/'.$_GET['p'].'.php';
}else{
    require 'paginas/home.php';
}*/ //não fazer assim

require 'paginas/'.$p.'.php';

include 'footer.php';
<?php
$pagina = 'pagina';

if(isset($_GET['p']) && !empty($_GET['p']) && file_exists('paginas/'.$_GET['p'].'.php')){
    $pagina = $_GET['p'];
}

require_once 'Cache.php';

$cache = new Cache();

if($cache->verifyCache('caches/'.$pagina.'.cache')){
    require_once 'caches/'.$pagina.'.cache';
}else{
    ob_start();
    require_once 'paginas/'.$pagina.'.php';
    $html = ob_get_contents();
    ob_end_clean();

    $cache->saveCache('caches/'.$pagina.'.cache', $html);
    echo $html;
}


/*if(file_exists('cache.cache')){
    require_once 'cache.cache';
}else{
    ob_start();
    require_once 'pagina.php';
    $html = ob_get_contents();
    ob_end_clean();

    file_put_contents('cache.cache', $html);
    echo $html;
}*/


<?php
require_once 'Cache.php';

$cache = new Cache();

if($cache->verifyCache()){
    require_once 'cache.cache';
}else{
    ob_start();
    require_once 'pagina.php';
    $html = ob_get_contents();
    ob_end_clean();

    $cache->saveCache($html);
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


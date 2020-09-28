<?php


class Core
{
    public function run()
    {
        $url = "/";

        if(isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $url = $this->checkRoutes($url);

        $params = [];

        if(!empty($_GET['url']) && $url != '/'){
            $url = explode('/',$url);
            array_shift($url);

            $currentController = ucfirst($url[0])."Controller";
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])){
                $currentAction = $url[0];
                array_shift($url);
            }else{
                $currentAction = "index";
            }

            if(count($url) > 0){
                $params = $url;
            }
        }else{
            $currentController = "HomeController";
            $currentAction = "index";
        }

        if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController,$currentAction)){
            $currentController = 'notfoundController';
            $currentAction = "index";
        }

        $c = new $currentController();
        call_user_func_array([$c,$currentAction], $params);
    }

    public function checkRoutes($url)
    {
        global $routes;

        foreach ($routes as $pt => $newurl){
            // identica arqumento e substitui regex
            $pattern = preg_replace('(\{[a-z0-9]{1,}\})','([a-z0-9-]{1,})', $pt);

            // faz o matche da url
            if(preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1){
                array_shift($matches);
                array_shift($matches);

                // pega todos os argumentos para associas
                $itens = [];

                if(preg_match_all('(\{[a-z0-9]{1,}\})', $pt, $m)){
                    $itens = preg_replace('(\{|\})','', $m[0]);
                }

                // faz a associacao
                $arg = [];

                foreach ($matches as $key => $match){
                    $arg[$itens[$key]] = $match;
                }

                // monta a nova url
                foreach ($arg as $argkey => $argvalue){
                    $newurl = str_replace(':'.$argkey, $argvalue, $newurl);
                }

                $url = $newurl;

                break;
            }
        }

        return $url;
    }
}
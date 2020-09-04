<?php

class Cache
{
    public function verifyCache($arquivo)
    {
        if(file_exists($arquivo) && $this->is_validate($arquivo)){
           return true;
        }

        return false;
    }

    public function saveCache($arquivo, $html)
    {
        file_put_contents($arquivo, $html);
    }

    public function is_validate($arquivo)
    {
        $ultima_modificacao = filemtime($arquivo);

        $current = time() - $ultima_modificacao;

        if($current > 20){
            return false;
        }

        return true;
    }
}

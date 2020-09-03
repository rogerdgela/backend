<?php

class Cache
{
    public function verifyCache($arquivo)
    {
        if(file_exists($arquivo)){
           return true;
        }
    }

    public function saveCache($arquivo, $html)
    {
        file_put_contents($arquivo, $html);
    }
}

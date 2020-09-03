<?php

class Cache
{
    public function verifyCache()
    {
        if(file_exists('cache.cache')){
           return true;
        }
    }

    public function saveCache($html)
    {
        file_put_contents('cache.cache', $html);
    }
}

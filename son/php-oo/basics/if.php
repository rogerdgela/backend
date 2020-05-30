<?php

function testando($x) {
    if($x){
        return true;
    }else{
        return false;
    }
}

function testando2($x) {
    if($x){
        return true;
    }
    return false;
}

function exemploSwicth($x){
    switch ($x){
        case 1 : break;
        case 2 :
        case 3 : return true;
    }
}
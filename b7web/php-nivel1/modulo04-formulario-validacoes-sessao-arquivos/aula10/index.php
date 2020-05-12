<?php
if(file_exists("lista.txt")){
    unlink('lista.txt');
    echo "Arquivo excluido com sucesso!";
}
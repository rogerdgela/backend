<?php
if(file_exists("lista.txt")){
    // move e renomeia
    rename("lista.txt","teste/lista.txt");
    //copia
    copy("teste/lista.txt","listateste.txt");
}
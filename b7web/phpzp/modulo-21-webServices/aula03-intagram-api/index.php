<?php
session_start();

require_once "instagramapi/Instagram.php";
require_once "inconfig.php";

if(isset($_SESSION['in_access_token']) && !empty($_SESSION['in_access_token'])){
    $instagram->setAccessToken($_SESSION['in_access_token']);

    $r = $instagram->getUser();
    //$r = $instagram->getUserMedia('self', 4);

    echo "Meu nome: ".$r->data->fullname;
}else{
    $loginUrl = $instagram->getLoginUrl();
    echo '<a href="'.$loginUrl.'">Login com Instagram</a>';
}
?>


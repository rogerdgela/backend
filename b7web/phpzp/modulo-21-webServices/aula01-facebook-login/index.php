<?php
require_once 'fb.php';

if(isset($_SESSION['fb_access_token']) && !empty(($_SESSION['fb_access_token']))){
    $res = $fb->get('/me?fields=email,name,id',$_SESSION['fb_access_token']);
    $r = json_decode($res->getBody());

    echo "Nome: ".$r->name;

    echo "<br><a href='sair.php'>sair</a>";
}else{
    header('Location: login.php');
}

<?php
require_once 'fb.php';

$helper = $fb->getRedirectLoginHelper();

try {
    $_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
}catch (Facebook\Exceptions\FacebookResponseException $e){
    echo "erro: ".$e->getMessage();
    exit();
}catch (Facebook\Exceptions\FacebookSDKException $e){
    echo "erro SDK: ".$e->getMessage();
    exit();
}

header('Location: index.php');
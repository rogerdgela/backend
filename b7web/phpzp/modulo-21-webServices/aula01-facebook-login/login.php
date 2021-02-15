<?php
require_once 'fb.php';

$helper = $fb->getRedirectLoginHelper();

$permissions = array('email');

$loginurl = $helper->getLoginUrl('http://b7web.backend/phpzp/modulo-21-webServices/aula01-facebook-login/callback.php',$permissions);
?>

<a href="<?php echo htmlspecialchars($loginurl); ?>">Fazer Login com o Facebook</a>

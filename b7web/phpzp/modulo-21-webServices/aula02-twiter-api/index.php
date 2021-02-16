<?php
session_start();

require_once "twconfig.php";
require_once "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

if(isset($_SESSION['tw_access_token']) && !empty($_SESSION['tw_access_token'])){
    $connection = new TwitterOAuth(CONSUMER_KEY,CONSUMER_SECRET, $_SESSION['tw_access_token']['oauth_token'],
        $_SESSION['tw_access_token']['oauth_token_secret']);

    $user = $connection->get("account/verify_credentials");
    //var_dump($user);
    //echo "Nome: ".$user->nome;
    if(isset($_POST['postagem']) && !empty($_POST['postagem'])){
        $connection->post('statuses/update',[
            'status' => htmlspecialchars($_POST['postagem'])
        ]);

        echo $user->nome." você postou a mensagem com sucesso!";
    }
?>
    <form method="post">
        <textarea name="postagem" maxlength="140"></textarea>
        <br>
        <input type="submit" value="Postar">
    </form>
<?php
}else{
    echo "<a href='login.php'>Login com Twitter</a>";
}
?>


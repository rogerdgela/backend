<?php
    session_start();

    if(isset($_SESSION['id']) and !empty($_SESSION['id'])) {
        echo "Restrito";
    }else{
        header("Location: login.php");
    }
?>
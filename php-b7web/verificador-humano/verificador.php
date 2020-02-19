<?php
    session_start();

    if(!empty($_POST['soma'])){
        $n = intval($_POST['soma']);
        if($_SESSION['v'] == $n){
            echo "Humano";
        }else{
            echo "Fake";
        }
    }else{
        header("Location: index.php");
    }
?>

<?php
    if(!empty($_POST['num1']) and !empty($_POST['num2']) and !empty($_POST['operacao'])){
        $n1 = floatval($_POST['num1']);
        $n2 = floatval($_POST['num2']);
        $op = $_POST['operacao'];

        switch ($op){
            case '+' :
                $conta = $n1+$n2;
                echo $n1." + ".$n2." = ".$conta; break;
            case '-' :
                $conta = $n1-$n2;
                echo $n1." - ".$n2." = ".$conta; break;
            case '*' :
                $conta = $n1*$n2;
                echo $n1." * ".$n2." = ".$conta; break;
            case '/' :
                $conta = $n1/$n2;
                echo $n1." / ".$n2." = ".$conta; break;
        }
    }else{
        header("Location: index.php");
    }
?>

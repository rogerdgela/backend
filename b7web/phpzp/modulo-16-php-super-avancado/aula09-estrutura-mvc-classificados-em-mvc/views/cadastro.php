<div class="container">
    <h1>Cadastre-se</h1>
    <?php
        if(!empty($mensagem)){
            echo $mensagem;
        }
    ?>
    <form method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control">
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" class="form-control">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-default">
    </form>
</div>
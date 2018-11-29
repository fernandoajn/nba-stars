<?php 
    include("header.php");
?>
    <div class="content">
        <span>Monte sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
    
            <form action="includes/signup.config.php" class="form" method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="confirma_senha" placeholder="Confirmar senha">
                <button class="btn btn-secondary" type="submit" name="submit">Cadastrar-se</button>
                <a class="btn btn-primary" type="button" href="login.php">Entrar</a>
            </form>

        </div>
    </div>
    
<?php 
    include("footer.php");
?>
<?php 
    include("header.php");
?>
    <div class="content">
        <span>Monte sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
    
            <form action="includes/login.config.php" class="form" method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit" class="btn btn-primary">Entrar</button>
                
                <a class="btn btn-secondary" type="button" href="index.php">Cadastrar-se</a>
            </form>
            
        </div>
    </div>
    
<?php 
    include("footer.php");
?>
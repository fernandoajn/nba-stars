<?php include("header.php"); ?>
<?php 
    if (isset($_SESSION['usuario'])) {
        header("Location:dashboard.php");
    } 
?>
    <div class="content">
        <span>Monte sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
    
            <form action="user-post.php" class="form" method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <button class="btn btn-secondary" type="submit" name="submit">Cadastrar-se</button>
                <small>Já tem uma conta? <a href="login.php" class="link">Faça o login!</a> </small>
            </form>

        </div>
    </div>
    
<?php 
include("footer.php");
?>
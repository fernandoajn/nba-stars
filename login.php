<?php 
include("header.php");
// Impedindo que usuario va para pagina de login quando estiver logado
if(isset($_SESSION['usuario'])){
    header("Location:dashboard.php");
 }
?>
    <div class="content">
        <span>Monte sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
    
            <form action="includes/login.config.php" class="form" method="post">
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <!-- <a class="btn btn-secondary" type="button" href="index.php">Cadastrar-se</a> -->
                <button type="submit" name="submit" class="btn btn-secondary">Entrar</button>
            </form>
            
        </div>
    </div>
    
<?php 
include("footer.php");
?>
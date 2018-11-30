<?php 
include("header.php");
// Impedindo que usuario va para pagina de login quando estiver logado
if(isset($_SESSION['usuario'])){
    header("Location:dashboard.php");
 }
?>
    <div class="content">
        <span>Gerencie sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
    
            <form action="includes/login.config.php" class="form" method="post">
                <?php
                    if(isset($_SESSION['msg'])) {
                        echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
                ?>
                <input type="text" name="usuario" placeholder="Usuário">
                <input type="password" name="senha" placeholder="Senha">
                <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                <small>Não tem uma conta? <a href="index.php" class="link">Cadastre-se!</a> </small>
            </form>
            
        </div>
    </div>
    
<?php 
include("footer.php");
?>
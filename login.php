<?php include("header.php") ?>
<?php
    if(isset($_SESSION['usuario'])){
        header("Location:dashboard.php");
    }

    $status = $_GET['status'];
?>
    <div class="content">
        <span>Gerencie sua equipe!</span>
        <small>Reúna os seus jogadores preferidos da maior liga de basquete do mundo <br> e crie o seu próprio dream team.</small>
        <div class="main">
            <form action="login-post.php" class="form" method="post">
            <?php if($status == 'success'):?>
            <div class="msg msg-success">Usuário cadastrado com sucesso!</div>
            <?php elseif($status == 'error'):?>
            <div class="msg msg-error">Não foi possível cadastrar!</div>
            <?php endif ?>
                <input type="text" name="user" placeholder="Usuário">
                <input type="password" name="password" placeholder="Senha">
                <button type="submit" name="submit" class="btn btn-primary">Entrar</button>
                <small>Não tem uma conta? <a href="index.php" class="link">Cadastre-se!</a> </small>
            </form>
            
        </div>
    </div>
    
<?php 
include("footer.php");
?>
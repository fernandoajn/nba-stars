<?php
  include("includes/connection.php");
  include("header.php");
  
  if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
  }
  
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];
  
  $query = "select id, usuario from usuarios where usuario = '{$usuario}' and senha = '{$senha}'";
  $result = mysqli_query($conexao, $query);
  
  ?>
  <section class="container">
    
    <?php
  if(1==1) {
    ?>
    <h1>Parabens, voce esta logado!</h1>
    <h3><?=$conexao?></h3>
    <?php
  }else {
    ?>
    <h1>Deu zica!</h1>
    <?php
  }
  
  ?>
  <?php 
  include("footer.php");
  
  ?>
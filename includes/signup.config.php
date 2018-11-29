<?php

if(isset($_POST['submit'])) {
  include_once 'connection.php';

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  // Verifica campos vazios
  if(empty($usuario) || empty($email) || empty($senha)) {
    header("Location: ../index.php");
    exit();
  } else {
    // Verifica se o usuario ja existe
    $query = "SELECT * FROM usuarios WHERE nome='$usuario'";
    $resultado = mysqli_query($conexao, $query);
    $verificacao = mysqli_num_rows($resultado);

    if($verificacao > 0) {
      header("Location: ../index.php?signup=userexists");
      exit();
    } else {
      // Criptografa a senha
      $criptosenha = password_hash($senha, PASSWORD_DEFAULT);
      //  Insere o usuario no banco de dados
      $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$usuario', '$email', '$criptosenha');";
      mysqli_query($conexao, $query);
      header("Location: ../index.php?signup=success");
      exit();
    }
  }
  
} else {
  header("Location: ../index.php?signup=empty");
  exit();
}
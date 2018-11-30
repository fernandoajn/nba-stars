<?php

if (isset($_POST['submit'])) {
  include_once 'connection.php';

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  
  // Verifica campos vazios
  if (empty($usuario) || empty($email) || empty($senha)) {
    header("Location: ../index.php");
    exit();
  } else {
    // Verifica se o usuario ja existe
    $query = "SELECT * FROM usuarios WHERE nome='$usuario'";
    $resultado = mysqli_query($conexao, $query);
    $verificacao = mysqli_num_rows($resultado);

    if ($verificacao > 0) {
      echo $msg;
      // header("Location: ../index.php");
      // exit();
    } else {
      // Criptografa a senha
      $criptosenha = password_hash($senha, PASSWORD_DEFAULT);
      // Cria o time do usuario
      $queryTime = "CREATE TABLE time_$usuario (
        id_jogador INT PRIMARY KEY AUTO_INCREMENT,
        numero int,
        nome varchar(50),
        sobrenome varchar(50),
        altura real,
        posicao varchar(2)
    )";
      mysqli_query($conexao, $queryTime);
      //  Insere o usuario no banco de dados
      $query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$usuario', '$email', '$criptosenha');";
      mysqli_query($conexao, $query);
      header("Location: ../login.php");
      exit();
    }
  }

} else {
  header("Location: ../index.php?signup=empty");
  exit();
}
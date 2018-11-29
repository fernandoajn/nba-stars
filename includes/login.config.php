<?php

session_start();

if (isset($_POST['submit'])) {
  include 'connection.php';

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  // Verifica campos vazios
  if (empty($usuario) || empty($senha)) {
    header("Location: login.php?login=empty");
    exit();
  } else {
    // Verifica o nome de usuario
    $query = "SELECT * FROM usuarios WHERE nome='$usuario' OR email='$usuario'";
    $resultado = mysqli_query($conexao, $query);
    $verificacao = mysqli_num_rows($resultado);

    if($verificacao < 1) {
      header("Location: login.php?login=error");
      exit();
    } else {
      if($row = mysqli_fetch_assoc($resultado)) {
        // Descriptografando a senha
        $descriptosenha = password_verify($senha, $row['senha']);
        if($descriptosenha == false) {
          header("Location: login.php?login=error");
          exit();
        }elseif($descriptosenha == true) {
          // Login sucesso!!!
          $_SESSION['id'] = $row['id'];
          $_SESSION['usuario'] = $row['nome'];
          $_SESSION['email'] = $row['email'];
          // header("Location: login.php?login=success");

      echo "<script type='text/javascript'>alert('cadastrado com sucesso!');</script>";
          header("Location: ../dashboard.php");
          exit();
        }
      }
    }
  }
} else {
  header("Location: login.php?login=error");
  exit();
}

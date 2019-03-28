<?php

session_start();

if (isset($_POST['submit'])) {
  include 'connection.php';

  $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

  // Verifica campos vazios
  if (empty($usuario) || empty($senha)) {
    $_SESSION['msg'] = "<div class='mensagem'>Preencha todos os campos!</div>";
    header("Location: ../login.php");
    exit();
  } else {
    // Verifica o nome de usuario
    $query = "SELECT * FROM usuarios_nba WHERE nome='$usuario' OR email='$usuario'";
    $resultado = mysqli_query($conexao, $query);
    $verificacao = mysqli_num_rows($resultado);

    if($verificacao < 1) {
      $_SESSION['msg'] = "<div class='mensagem'>Usuário e/ou senha incorretos!</div>";
      header("Location: ../login.php");
      exit();
    } else {
      if($row = mysqli_fetch_assoc($resultado)) {
        // Descriptografando a senha
        $descriptosenha = password_verify($senha, $row['senha']);
        if($descriptosenha == false) {
          $_SESSION['msg'] = "<div class='mensagem'>Usuário e/ou senha incorretos!</div>";
          header("Location: ../login.php");
          exit();
        }elseif($descriptosenha == true) {
          // Login sucesso!!!
          $_SESSION['id'] = $row['id'];
          $_SESSION['usuario'] = $row['nome'];
          $_SESSION['email'] = $row['email'];
          header("Location: ../dashboard.php");
          exit();
        }else{
          header("Location: ../login.php");
        }
      }
    }
  }
} else {
  // So pode ser acessado pela pagina de login
  $_SESSION['msg'] = "<div class='mensagem'>404 Not Found!</div>";
  header("Location: login.php?login=error");
  exit();
}

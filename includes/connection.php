<?php
  $conexao = mysqli_connect("mysql", "default", "secret", "default") or die('Nao foi possivel conectar!');

  // Definindo o usuario da sessao atual
  $usuario = $_SESSION['usuario'];
  
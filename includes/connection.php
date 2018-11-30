<?php
  $conexao = mysqli_connect("localhost", "root", "", "nba_stars") or die('Nao foi possivel conectar!');

  // Definindo o usuario da sessao atual
  $usuario = $_SESSION['usuario'];
  
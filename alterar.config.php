<?php
include("header.php");
include("includes/connection.php");
include("includes/jogadores.config.php");
require_once("class/Jogador.php");

$jogador = new Jogador();

$jogador->id = $_POST['id'];
$jogador->nome = $_POST['nome'];
$jogador->sobrenome = $_POST['sobrenome'];
$jogador->posicao = $_POST['posicao'];
$jogador->numero = $_POST['numero'];
$jogador->altura = $_POST['altura'];

if(alterarJogador($conexao, $jogador)) {
  echo "<span>Produto alterado com sucesso!<span>";
  header("Location: dashboard.php");
}else {
  $msg = mysqli_error($conexao);
  echo "<span>Erro: {$msg}</span>";
}

include("footer.php");
?>
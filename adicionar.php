<?php
include("header.php");
require_once("includes/connection.php");
require_once("includes/jogadores.config.php");

$jogador = new Jogador();

$jogador->nome = $_POST['nome'];
$jogador->sobrenome = $_POST['sobrenome'];
$jogador->posicao = $_POST['posicao'];
$jogador->altura = $_POST['altura'];
$jogador->numero = $_POST['numero'];

if(addJogador($conexao, $jogador)) {
  echo '<span>Jogador adicionado com sucesso!</span>';
}else {
  echo '<span>Ocorreu um erro! Tente mais tarde!</span>';
}
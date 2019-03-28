<?php

error_reporting(E_ALL);
  ini_set('display_errors', 1);

require_once 'global.php';

include("header.php");
// require_once("includes/jogadores.config.php");

$jogador = new Jogador();
$jogadorDao = new JogadorDao(Connection::getConnection());

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$posicao = $_POST['posicao'];
$altura = $_POST['altura'];
$numero = $_POST['numero'];

$jogador->setNome($nome);
$jogador->setSobrenome($sobrenome);
$jogador->setPosicao($posicao);
$jogador->setAltura($altura);
$jogador->setNumero($numero);

$token = '';

try {
  $jogadorDao->add($jogador);
  header("Location: players.php?playeradd=success");

}catch(Exception $e) {
  Erro::getError($e);
  header("Location: players.php?playeradd=fail");
}

// if($jogadorDao->add($jogador)) {
//   header("Location: dashboard.php?playeradd=success");
//   exit();
// }else {
//   header("Location: dashboard.php?playeradd=fail");
//   exit();
// }

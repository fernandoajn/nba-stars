<?php include 'header.php'; ?>
<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
require_once 'global.php';  

$jogador = new Jogador();
$jogadorDao = new JogadorDao(Connection::getConnection());

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$posicao = $_POST['posicao'];
$numero = $_POST['numero'];
$altura = $_POST['altura'];

$jogador->setId($id);
$jogador->setNome($nome);
$jogador->setSobrenome($sobrenome);
$jogador->setPosicao($posicao);
$jogador->setNumero($numero);
$jogador->setAltura($altura);

if($jogadorDao->update($jogador)) {
  header("Location: players.php");
}else {
  header("Location: alterar.php?id=".$_POST['id']);
}

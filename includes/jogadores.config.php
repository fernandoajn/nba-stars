<?php
require_once("connection.php");
require_once("class/Jogador.php");

function buscaJogadores($conexao)
{
  $jogadores = array();
  $query = "SELECT * FROM jogadores";
  $resultado = mysqli_query($conexao, $query);

  while ($jogadores_array = mysqli_fetch_assoc($resultado)) {
    $jogador = new Jogador();

    $jogador->id = $jogadores_array["id_jogador"];
    $jogador->numero = $jogadores_array["numero"];
    $jogador->posicao = $jogadores_array["posicao"];
    $jogador->nome = $jogadores_array["nome"];
    $jogador->sobrenome = $jogadores_array["sobrenome"];
    $jogador->altura = $jogadores_array["altura"];

    array_push($jogadores, $jogador);
  }

  return $jogadores;
}

function addJogador($conexao, Jogador $jogador) {
  $query = "INSERT INTO jogadores (numero, nome, sobrenome, altura, posicao) VALUES ({$jogador->numero}, '{$jogador->nome}', '{$jogador->sobrenome}', {$jogador->altura},
  '{$jogador->posicao}')";
  return mysqli_query($conexao, $query);
}

function rmJogador($conexao, $id) {
  $query = "DELETE FROM jogadores WHERE id_jogador = {$id}";
  return mysqli_query($conexao, $query);
}
?>
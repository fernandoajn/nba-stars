<?php 

class JogadorDao{

  private $connection;

  public function __construct($connection) {
    $this->connection = $connection;
  }

  public function list() {
    $query = "SELECT id, numero, nome, sobrenome, altura, posicao FROM jogadores ORDER BY altura";
    $stmt = $this->connection->query($query);
    $result = $stmt->fetchAll();
    return $result;
  }

  public function get($id) {
    $query = "SELECT id, numero, nome, sobrenome, altura, posicao FROM jogadores WHERE id = :id";
    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
  }

  public function add(Jogador $player) {
    $query = "INSERT INTO jogadores(numero, nome, sobrenome, altura, posicao) VALUES (:numero, :nome, :sobrenome, :altura, :posicao)";
    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':numero', $player->getNumero());
    $stmt->bindValue(':nome', $player->getNome());
    $stmt->bindValue(':sobrenome', $player->getSobrenome());
    $stmt->bindValue(':altura', $player->getAltura());
    $stmt->bindValue(':posicao', $player->getPosicao());
    return $stmt->execute();
  }

  public function update(Jogador $player) {
    $query = "UPDATE jogadores SET numero = :numero, nome = :nome, sobrenome = :sobrenome, altura = :altura, posicao = :posicao WHERE id = :id";
    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':numero', $player->getNumero());
    $stmt->bindValue(':nome', $player->getNome());
    $stmt->bindValue(':sobrenome', $player->getSobrenome());
    $stmt->bindValue(':altura', $player->getAltura());
    $stmt->bindValue(':posicao', $player->getPosicao());
    $stmt->bindValue(':id', $player->getId());
    return $stmt->execute();
  }

}
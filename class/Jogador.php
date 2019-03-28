<?php

class Jogador
{
  private $id;
  private $numero;
  private $nome;
  private $posicao;
  private $sobrenome;
  private $altura;

  public function __construct($id = null) {
    if($id) {
      $this->id = $id;
    }
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    return $this->id = $id;
  }

  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    return $this->numero = $numero;
  }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    return $this->nome = $nome;
  }

  public function getPosicao() {
    return $this->posicao;
  }

  public function setPosicao($posicao) {
    return $this->posicao = $posicao;
  }

  public function getSobrenome() {
    return $this->sobrenome;
  }

  public function setSobrenome($sobrenome) {
    return $this->sobrenome = $sobrenome;
  }

  public function getAltura() {
    return $this->altura;
  }

  public function setAltura($altura) {
    return $this->altura = $altura;
  }

}
?>
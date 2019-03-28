<?php

class User {
  
  private $id;
  private $nome;
  private $email;
  private $senha;

  public function __construct($nome, $email) {
    $this->nome = $nome;
    $this->email = $email;
  }

  public function getId() {
    return $this->id;
  }
  
  public function getNome() {
    return $this->nome;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getSenha() {
    return $this->senha;
  }

  public function setId($id) {
    return $this->id = $id;
  }

  public function setSenha($senha) {
    return $this->senha = $senha;
  }
}
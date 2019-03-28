<?php

class UserDao {

  private $connection;

  public function __construct($connection) {
    $this->connection = $connection;
  }

  public function login(User $user) {
    $md5 = md5($user->getSenha());

    $query = "SELECT id, nome, email, senha FROM usuarios_nba WHERE nome = :user AND senha = :password";
    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':user', $user->getNome());
    $stmt->bindValue(':password', $user->getSenha());
    $stmt->execute();

    $result =  $stmt->fetch(PDO::FETCH_ASSOC);

    $id = $result['id'];
    $name = $result['nome'];
    $email = $result['email'];
    $password = $result['senha'];

    $user = new User($name, $email);
    $user->setId($id);
    $user->setSenha($password);
    
    return $user;
  }

  public function list() {
    $users = [];

    $query =  "SELECT id, nome, email FROM usuarios_nba ORDER BY id";
    $stmt = $this->connection->query($query);

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $id =  $result['id'];
      $nome =  $result['nome'];
      $email =  $result['email'];
      
      $user = new User($nome, $email);
      array_push($users, $user);
    }
    
    return $users;
  }

  public function add($nome, $email, $senha) {
    $query = "INSERT INTO usuarios_nba(nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $this->connection->prepare($query);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':senha', $senha);
    return $stmt->execute();
  }
}
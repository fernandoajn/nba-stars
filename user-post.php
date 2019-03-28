<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once 'global.php';

  try {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $userDao = new UserDao(Connection::getConnection());
    
    if($userDao->add($usuario, $email, $senha)) {
      header("Location: login.php?status=success");
    }else {
      header("Location: index.php?status=failed");
    }

  }catch(Exception $e) {
    Error::getError($e);
  }
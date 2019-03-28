<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  require_once 'global.php';
  session_start();

  try {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $user = new User($user, null);
    $user->setSenha($password);
    $userDao = new UserDao(Connection::getConnection());
    
    if($userDao->login($user)) {
      $_SESSION['id_usuario'] = $user->getId();
      $_SESSION['nome_usuario'] = $user->getNome();
      header('Location: dashboard.php');
    }else {
      header('Location: login.php?status=error');
      exit;
    }

  }catch(Exception $e) {
    Erro::getError($e);
  }
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
  <title>NBA Stars</title>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <nav class="navbar">
      <h1>NBA STARS</h1>
      <ul class="nav-menu">
      <li class="nav-item"><a href="index.php">Home</a></li>
      <li class="nav-item"><a href="sobre.php">Sobre</a></li>
    <?php 
      if(isset($_SESSION['id'])) {
        echo ' <li><form action="includes/logout.config.php" method="post">
                <button type="submit" name="submit" class="btn-logout">Sair</button>
              </form></li>';
      }
    ?>
    </ul>

    
  </nav>

  <section class="container">
   
<?php
include("header.php");
require_once("includes/connection.php");
require_once("includes/jogadores.config.php");

$id = $_POST['id'];
rmJogador($conexao, $id, $usuario);

header("Location: dashboard.php?removido=true");
die();
?>

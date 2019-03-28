<?php include 'header.php' ?>
<?php 

require_once 'global.php';

try {
  $id = $_GET['id'];
  $jogadorDao = new JogadorDao(Connection::getConnection());
  $player = $jogadorDao->get($id);
  
}catch(Exception $e) {
  Erro::getError($e);
}

?>

<form class="form" action="alterar.config.php" method="post">
  <input type="hidden" name="id" value="<?=$player['id']?>">
  <small class="task-title">Editar jogador:</small>
  <input type="text" value="<?=$player['nome']?>" name="nome">
  <input type="text" placeholder="Sobrenome" value="<?=$player['sobrenome']?>" name="sobrenome">
  <!-- <input type="text" placeholder="Posição" name="posicao" max="2" maxlength="2"> -->
  <select name="posicao" id="posicao">
    <option value="" disabled>Posição:</option>
    <option value="PG">Point Guard</option>
    <option value="SG">Shooting Guard</option>
    <option value="SF">Small Forward</option>
    <option value="PF">Power Forward</option>
    <option value="C">Center</option>
  </select>
  <input type="number" placeholder="Altura" min="1.78" max="2.35" step="0.01" name="altura" value="<?=$player['altura']?>">
  <input type="number" placeholder="N° da camisa" min="0" max="99" name="numero" value="<?=$player['numero']?>">
  <button class="btn btn-secondary" type="submit" onclick="ajax('')">Alterar</button>
  <a href="dashboard.php" class="btn btn-primary">Voltar</a>
</form>

<?php


include("footer.php");
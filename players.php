<?php include 'header.php' ?>
<?php 
  require_once 'global.php';
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

  $jogadorDao = new JogadorDao(Connection::getConnection());
  $players = $jogadorDao->list();
  $playerIsAdd = $_GET['playeradd'];
?>

<?php if($playerIsAdd == 'success'): ?>
  <div class="msg msg-success animated fadeOut delay-1s">Jogador adicionado com sucesso!</div>
<?php elseif($playerIsAdd == 'fail'): ?>
  <div class="msg msg-error animated fadeOut delay-1s">Não foi possível adicionar jogador!</div>
<?php endif ?>

<div class="content fluid">
  <div class="cpanel">
    <table class="players-list">
      <tr>
        <th>Posição</th>
        <th>Nome</th>
        <th>Camisa</th>
        <th>Altura</th>
        <th></th>
      </tr>

      <?php foreach($players as $player): ?>
        <tr class="clickable" data-href="https://www.google.com/search?q=<?=$player['nome']?>+<?=$player['sobrenome']?>">
          <td><?=$player['posicao']?></td>
          <td><a ><?=$player['nome'].' '.$player['sobrenome']?></a></td>
          <td><?=$player['numero']?></td>
          <td><?=$player['altura']?></td>
          <td><a href="alterar.php?id=<?=$player['id']?>"><i class="fas fa-edit"></i></a></td>
        </tr>
      <?php endforeach ?>
    </table>
  </div>
</div>

<a href="#" name="submit" data-show="modal" id="btnadd" class="btn btn-secondary">Adicionar jogador</a>

<div id="addJogador" class="modal-hide">
  <a type="button" class="modal-toggler"><i class="fas fa-times fa-2x"></i></a>
  <div class="modal-content">
    <form class="form" action="adicionar.php" method="post">
      <small class="task-title">Adicionar jogador: </small>
      <input type="text" placeholder="Nome" name="nome">
      <input type="text" placeholder="Sobrenome" name="sobrenome">
      <select name="posicao" id="posicao">
        <option value="" disabled>Posição:</option>
        <option value="PG">Point Guard</option>
        <option value="SG">Shooting Guard</option>
        <option value="SF">Small Forward</option>
        <option value="PF">Power Forward</option>
        <option value="C">Center</option>
      </select>
        <input type="number" placeholder="Altura" min="1.78" max="2.35" step="0.01" name="altura">
        <input type="number" placeholder="N° da camisa" min="0" max="99" name="numero">
        <button class="btn btn-secondary" type="submit">Adicionar</button>
        <small><a href="sobre.php">Precisa de ajuda?</a></small>
      </form>
    </div>
  </div>
<?php include 'footer.php' ?>
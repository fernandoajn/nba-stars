<?php
include("header.php");
require_once("includes/connection.php");
require_once("includes/jogadores.config.php");

// Pagina acessivel somente se estiver logado
if (!isset($_SESSION['usuario'])) {
  header("Location:login.php");
}

// Remocao
if(array_key_exists("removido", $_GET) && $_GET['removido'] == 'true') {
  // echo "<span>Removido com sucesso!</span>";
}

$jogadores = buscaJogadores($conexao, $usuario);
?>
<div class="content fluid">
  <div class="cpanel">
      <span class="task-title">Time de <h5 class="username"><?=$usuario?></h5></span>
      <table class="players-list">
        <tr>
          <th>Posição</th>
          <th>Nome</th>
          <th>Camisa</th>
          <th>Altura</th>
          <th></th>
          <th></th>
        </tr>
        
        <?php 
foreach ($jogadores as $jogador) :
  ?>        

        <tr>
          <td><?=$jogador->posicao?></td>
          <td><?=$jogador->nome.' '.$jogador->sobrenome?></td>
          <td><?=$jogador->numero?></td>
          <td><?=$jogador->altura?>m</td>
          <td><a href="alterar.php?id=<?=$jogador->id?>"><i class="fas fa-edit"></i></a></td>
          <td>
            <form action="remover.php" method="post">
              <input type="hidden" name="id" value="<?=$jogador->id?>">
              <button class="btn-none"><i class='fas fa-times'></i></button>
            </form>
          </td>
            
        </tr>
        
        <?php endforeach ?>
        
      </table>
      <!-- <div id="warning">Mensagem de retorno aqui</div> -->
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

  <div class="aviso-responsivo">
    <span>Dispositivo incompatível no momento, aguarde atualizações.
          <br><br>
          Lamentamos o transtorno.
    </span>
  </div>


<?php 
include("footer.php");
?>
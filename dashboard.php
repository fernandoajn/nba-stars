<?php
include("header.php");
require_once("includes/connection.php");
require_once("includes/jogadores.config.php");

// Pagina acessivel somente se estiver logado
if (!isset($_SESSION['usuario'])) {
  header("Location:login.php");
}

$jogadores = buscaJogadores($conexao);
?>
<div class="content div-2">
  <div class="cpanel">
      <!-- <span>Meu Dream Team</span> -->
      <table class="players-list">
        <tr>
          <th>Posição</th>
          <th>Nome</th>
          <th>Camisa</th>
          <th>Altura</th>
          <!-- <th>@</th> -->
        </tr>
        
        <?php 
foreach ($jogadores as $jogador) :
  ?>        

        <tr>
          <td><?=$jogador->posicao?></td>
          <td><?=$jogador->nome.' '.$jogador->sobrenome?></td>
          <td><?=$jogador->numero?></td>
          <td><?=$jogador->altura?>m</td>
        </tr>
        
        <?php endforeach ?>
        
      </table>
      <!-- <div id="warning">Mensagem de retorno aqui</div> -->
    </div>
    <form class="form">
      <small>Novo jogador: </small>
      <input type="text" placeholder="Nome" name="nome">
      <input type="text" placeholder="Sobrenome" name="sobrenome">
      <input type="text" placeholder="Posição" name="posicao">
      <input type="text" placeholder="Altura" name="altura">
      <input type="text" placeholder="N° da camisa" name="numero">
      <button class="btn btn-primary" type="submit" onclick="ajax('')">Adicionar</button>
    </form>
    
  </div>


<?php 
include("footer.php");
?>
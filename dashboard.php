<?php
include("header.php");
// Pagina acessivel somente se estiver logado
if(!isset($_SESSION['usuario'])){
   header("Location:login.php");
}
?>
<div class="content">
  <span>Meu Dream Team</span>
    <div class="cpanel">
      <table class="players-list">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Posicao</th>
          <th>Idade</th>
          <th>Altura</th>
          <!-- <th>@</th> -->
        </tr>

        <tr>
          <td>30</td>
          <td>Stephen Curry</td>
          <td>PG</td>
          <td>30</td>
          <td>1.91</td>
        </tr>

        <tr>
          <td>8</td>
          <td>Zach LaVine</td>
          <td>SG</td>
          <td>22</td>
          <td>1.98</td>
        </tr>

        <tr>
          <td>23 </td>
          <td>Lebron James</td>
          <td>SF</td>
          <td>32</td>
          <td>2.03</td>
        </tr>

        <tr>
          <td>35</td>
          <td>Kevin Durant</td>
          <td>PF</td>
          <td>29</td>
          <td>2.08</td>
        </tr>

        <tr>
          <td>21</td>
          <td>DeAndre Jordan</td>
          <td>C</td>
          <td>32</td>
          <td>2.11</td>
        </tr>

      </table>
    </div>
</div>

<?php 
include("footer.php");
?>
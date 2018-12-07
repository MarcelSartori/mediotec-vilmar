<?php
// Crio minha consultao ao banco
$sqlmenu = "SELECT * FROM categorias ORDER BY nome ASC";
// Armazeno o resultado do comando na variável $resultado
$resultado_menu = mysql_query($sqlmenu);
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Vilmar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Página Inicial</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
            while ($categoria = mysql_fetch_array($resultado_menu)) {
              echo '<li><a href="link">'.$categoria['nome'].'</a></li>';
            }
            ?>
          </ul>
        </li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastro.php">Cadastrar Notícia</a></li>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Digite sua busca">
          </div>
          <button type="submit" class="btn btn-default">Pesquisar</button>
        </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
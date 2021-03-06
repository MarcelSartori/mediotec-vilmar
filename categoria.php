<?php
// Iniciando a Sessão
session_start();

// Incluindo a Conexão com o BD
include("conexao.php");

// Crio minha consultao ao banco
$categoria = $_GET['id'];
$sql = "SELECT * FROM noticias WHERE categoria = ".$categoria." ORDER BY data_cadastro DESC";

// Armazeno o resultado do comando na variável $resultado
$resultado = mysql_query($sql);

// Dados da Categoria
$sql_categoria = "SELECT * FROM categorias WHERE id = ".$categoria;
$resultado_categoria = mysql_query($sql_categoria);
$dados = mysql_fetch_array($resultado_categoria);

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Site Oficial da Escola Vilmar Vieira de Matos</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">

      <div class="col-md-12">

        <?php include("menu.php") ?>

      </div>

      <div class="col-md-12">

        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>
          <li><a href="noticias.php">Notícias</a></li>
          <li class="active"><?php echo $dados['nome']; ?></li>
        </ol>

      </div>

      <div class="col-md-8">

        <?php 

        if ( (isset($_GET['mensagem'])) && ($_GET['mensagem'] == "sucesso") ) {
          echo '<div class="alert alert-success" role="alert">Ação realizada com Sucesso!</div>';
        } else if ( (isset($_GET['mensagem'])) && ($_GET['mensagem'] == "falha") ) {
          echo '<div class="alert alert-danger" role="alert">A ação não pode ser realizada. Tente Novamente!</div>';
        }

        while ($noticia = mysql_fetch_array($resultado)) {
          
          echo '<div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <img class="media-object img-thumbnail" src="fotos/'.$noticia['foto'].'" width="100" alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading"><a href="ler_noticia.php?id='.$noticia['id'].'">'.$noticia['titulo'].'</a></h4>
              Notícia publicada em '.date("d/m/y H:i", strtotime($noticia['data_cadastro'])).'
            </div>';

            // Verifica se o usuário está logado e oferece as opções de edição
            if (isset($_SESSION['cod_usuario']) && $_SESSION['nivel'] == 'administrador') {
              echo '<a class="btn btn-xs btn-success" href="editar.php?id='.$noticia['id'].'" role="button">Editar</a>
                <a class="btn btn-xs btn-danger" href="delete.php?id='.$noticia['id'].'" role="button">Excluir</a>';
            }
          echo '</div>';

        }

        ?>

      </div>

    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Crio minha consultao ao banco
$sql = "SELECT * FROM noticias ORDER BY data_cadastro DESC";

// Armazeno o resultado do comando na variável $resultado
$resultado = mysql_query($sql);

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

      <div class="col-md-8">
        <?php

        while ($noticia = mysql_fetch_array($resultado)) {
          
          echo '<div class="media">
            <div class="media-left media-middle">
              <a href="#">
                <img class="media-object" src="..." alt="...">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">'.$noticia['titulo'].'</h4>
              Notícia publicada em '.date("d/m/y H:i", strtotime($noticia['data_cadastro'])).'
            </div>
          </div>';

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
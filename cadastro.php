<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Crio minha consultao ao banco
$sql = "SELECT * FROM categorias ORDER BY nome ASC";

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
    <title>Cadastro de Notícia</title>

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

        <?php include('menu.php') ?>

      </div>

      <div class="col-md-12">

        <form action="insert.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="categoria">Selecione uma Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
          
              <?php

              while ($categoria = mysql_fetch_array($resultado)) {
                
                echo '<option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';

              }

              ?>

            </select>
          </div>

          <div class="form-group">
            <label for="titulo">Título da Notícia</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite aqui o Título">
          </div>

          <div class="form-group">
            <label for="texto">Texto da Notícia</label>
            <textarea type="text" class="form-control" rows="10" id="texto" name="texto" placeholder="Digite aqui o Texto da Notícia"></textarea>
          </div>

          <div class="form-group">
            <label for="fonte">Fonte da Notícia</label>
            <input type="text" class="form-control" id="fonte" name="fonte" placeholder="Digite aqui a Fonte">
          </div>

          <div class="form-group">
            <label for="fonte">Foto da Notícia</label>
            <input type="file" class="form-control" id="foto" name="foto">
          </div>

          <button type="submit" class="btn btn-primary">Cadastrar Notícia</button>

        </form>

      </div>

    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<?php

// Incluindo a Conexão com o BD
include("conexao.php");

// Dados da Notícia
$id = $_GET['id'];
$sql_noticia = "SELECT * FROM noticias WHERE id = ".$id;
$resultado_noticia = mysql_query($sql_noticia);
$noticia = mysql_fetch_array($resultado_noticia);

// Categorias do Sistema
$sql = "SELECT * FROM categorias ORDER BY nome ASC";
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
    <script src="ckeditor/ckeditor.js"></script>
  </head>
  <body>
    
    <div class="container">

      <div class="col-md-12">

        <?php include('menu.php') ?>

      </div>

      <div class="col-md-12">

        <form action="update.php" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="categoria">Selecione uma Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
          
              <?php

              while ($categoria = mysql_fetch_array($resultado)) {
                
                if ($categoria['id'] == $noticia['categoria']) {
                  echo '<option value="'.$categoria['id'].'" selected>'.$categoria['nome'].'</option>';
                } else {
                  echo '<option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';
                }

              }

              ?>

            </select>
          </div>

          <div class="form-group">
            <label for="titulo">Título da Notícia</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite aqui o Título" value="<?php echo $noticia['titulo']; ?>">
          </div>

          <div class="form-group">
            <label for="texto">Texto da Notícia</label>
            <textarea type="text" class="form-control" rows="10" id="texto" name="texto" placeholder="Digite aqui o Texto da Notícia"><?php echo $noticia['texto']; ?></textarea>
            <script>
                CKEDITOR.replace('texto');
            </script>
          </div>

          <div class="form-group">
            <label for="fonte">Fonte da Notícia</label>
            <input type="text" class="form-control" id="fonte" name="fonte" placeholder="Digite aqui a Fonte" value="<?php echo $noticia['fonte']; ?>">
          </div>

          <div class="row">

            <div class="col-md-4">
              <img src="fotos/<?php echo $noticia['foto']; ?>" class="img-responsive img-rounded">
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label for="foto">Se você deseja alterar a foto, selecione um novo arquivo</label>
                <input type="file" class="form-control" id="foto" name="foto">
              </div>
            </div>

          </div>



          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <button type="submit" class="btn btn-primary">Atualizar Notícia</button>

        </form>

      </div>

    </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
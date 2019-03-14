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

        <h1>
          Formulário de Contato<br>
          <small>Digite sua mensagem e envie pra gente!</small>
        </h1>

        <form action="envia_mensagem.php" method="post">
          <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome">
          </div>

          <div class="form-group">
            <label for="email">Email para Contato</label>
            <input type="email" class="form-control" name="email" placeholder="Digite seu melhor e-mail">
          </div>

          <div class="form-group">
            <label for="telefone">Telefone para Contato</label>
            <input type="text" class="form-control" name="telefone" placeholder="Digite seu telefone de contato">
          </div>

          <div class="form-group">
            <label for="mensagem">Mensagem</label>
            <textarea class="form-control" name="mensagem" placeholder="Digite sua mensagem" rows="8"></textarea>
          </div>

          <button type="submit" class="btn btn-default">Enviar Mensagem</button>

        </form>

      </div>

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
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

      <form action="processa-login.php" method="post" class="col-md-6 col-md-offset-3">

          <h1>Formulário de Login</h1>
          <h3>Digite seus dados e clique em Entrar</h3>
          
          <?php
          if ( (isset($_GET['mensagem'])) && ($_GET['mensagem'] == "erro") ) {
            echo '<div class="alert alert-danger" role="alert">Login ou Senha errados! Tente Novamente</div>';
          }

          if ( (isset($_GET['mensagem'])) && ($_GET['mensagem'] == "erro-administrador") ) {
            echo '<div class="alert alert-danger" role="alert">Você não tem permissão para acessar esta página! Tente novamente.</div>';
          }

          ?>

          <div class="form-group">
              <input name="login" type="text" class="form-control input-lg" placeholder="Digite seu Login">
          </div>
        
          <div class="form-group">
              <input name="senha" type="password" class="form-control input-lg" placeholder="Digite sua Senha">
          </div>          
        
          <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Entrar</button>
          </div>
      
      </form>      

    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
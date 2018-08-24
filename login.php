<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Integrador-6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container-fluid">

    <header><!-- HEADER -->
      <?php
          include ("header.php");
       ?>
    </header>

<div class="total col-lg-12">

        <div class="titulo col-xs-12">
          <h2>Formulário de Login</h2>
        </div>

        <div class= "foto col-lg-3 col-md-4 col-sm-6">
          <img src="imagens/giselemaq1.jpg" alt="Gisele Bündchen" title="Gisele Bündchen">
        </div>

        <div class="formulario col-lg-4 col-md-4 col-sm-6">
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
                </div>
                <div class="form-group" >
                    <label for="pwd">Senha</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Digite sua senha" name="pswd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" name="remember"> Lembrar
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
      <div class="branco col-lg-5 col-md-4 col-sm-0">
      </div>

      <div class="botredes col-xs-6">
           <a href="#" class="fb btn">
             <i class="fa fa-facebook fa-fw"></i> Login with Facebook
              </a>
           <a href="#" class="google btn"><i class="fa fa-google fa-fw">
             </i> Login with Google+
               </a>
        </div>
</div>

    <footer>
      <?php
          include ("footer.php");
       ?>
    </footer>

  </div>

<!-- link do JavaScript do jQUERY  -->
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
crossorigin="anonymous"></script>

<!-- link do JavaScript do BOOTSTRAP  -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script>

</body>
</html>

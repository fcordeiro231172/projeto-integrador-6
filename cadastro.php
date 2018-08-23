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
  <div class="container">

    <header><!-- HEADER -->
      <?php
          include ("header.php");
       ?>
    </header>
      <row>
        <h2>Formulário de Cadastro</h2>
        <form class="form-inline" action="/action_page.php">
          <div class="form-group">
              <label for="email" class="mr-sm-2">Email</label>
              <input type="email"  class="form-control mr-sm-2" id="email" placeholder="Digite seu email" name="email">
          </div>
          <div class="form-group">
              <label for="pwd"  class="mr-sm-2">Senha</label>
              <input type="password" class="form-control mr-sm-2" id="pwd" placeholder="Digite sua senha" name="pswd">
          </div>
          <br>
          <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" id="nome">
          </div>
          <div class="form-group">
              <label for="sobrenome">Sobrenome:</label>
              <input type="text" class="form-control" id="sobrenome">
          </div>
          <br>
          <div class="form-group">
              <label for="celular">celular:</label>
              <input type="text" class="form-control" id="celular">
          </div>
          <div class="form-group">
              <label for="cpf">CPF:</label>
              <input type="text" class="form-control" id="cpf">
          </div>
          <div class="form-check-inline">
            <p> Sexo</p>
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="1">Masculino
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="2">Feminino
            </label>
          </div>



          <div class="form-check-inline">
            <p> Áreas de Interesse</p>
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="1">Maquilagem
            </label>
          </div>
          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="2">Cabelo
            </label>
          </div>
          <div class="form-check-inline disabled">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="3">Higiene Pessoal
            </label>
          </div>
          <br>
          <button type="submit" class="btn btn-primary mr-sm-4">Submit</button>
        </form>
      </row>
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

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>


  <?php include ("header.php"); ?>


<div class="total col-lg-12">

        <div class="titulo col-xs-12">
          <h2>Formulário de Login</h2>
        </div>

        <div class= "foto col-lg-3 col-md-4 col-sm-6">
          <img src="imagens/giselemaq1.jpg" alt="Gisele Bündchen" title="Gisele Bündchen">
        </div>

        <div class="formulario col-lg-4 col-md-4 col-sm-6">
            <form action="/action_page.php" method="post">
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
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
            <br>
            <a href="/confirmacaodesenha" target="_blank"><p>Esqueci minha senha</p>
      </div>
      <div class="branco col-lg-5 col-md-4 col-sm-0">
      </div>

      <div class="botredes col-xs-6">
           <a href="#" class="fb btn">
             <i class="fa fa-facebook fa-fw"></i> Login com Facebook
              </a>
           <a href="#" class="google btn"><i class="fa fa-google fa-fw">
           </i> Login com Google+
               </a>
        </div>
</div>


<!-- FOOTER -->
<?php include ("footer.php"); ?>

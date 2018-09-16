<?php session_start(); ?>
<?php
if($_POST) {

  $local_file = "dados.json";
  if (file_exists($local_file)){
    $recuperar = file_get_contents($local_file);
    $cadastro = json_decode ($recuperar, true);
  } else {
    $cadastro = [
      "usuarios" => []
      ];
    }
  $validacao = $cadastro['usuarios'];

  // VALIDAR SE O USUÁRIO Não Existe, UTILIZANDO O CAMPO E-MAIL
  if ($validacao !== null) {
    foreach ($validacao as $key => $value) {
      if ($validacao[$key]['email'] != $_POST['email']) {
        echo "USUÁRIO NÃO CADASTRADO!";
        header ('Location: cadastro.php');
        break;
      }
    }
  }


  // VALIDAR EMAIL E SENHA ENTRE $_POST E O BANCO: USANDO "FOREACH"
  $teste = 'false';
  foreach ($validacao as $key => $value) {
    if ($_POST['email'] == $value['email'] && password_verify($_POST['senha'], $value['senha'])) {
      $teste = 'true';
      if ($_POST['lembrar'] == true) {
        setcookie('email', $_POST['email']);
        setcookie('senha', $_POST['senha']);
      }
        $_SESSION['nome']=$value['nome'];
        $_SESSION['email']=$value['email'];
        $_SESSION['logado']='true';
        header ('Location: validaLogin.php');

    }
  }
}
?>
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
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email..." name="email" value="<?php echo isset($_COOKIE['email'])?$_COOKIE['email']:"" ?>">
                </div>
                <div class="form-group" >
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Digite sua senha..." name="senha" value="<?php echo isset($_COOKIE['senha'])?$_COOKIE['senha']:"" ?>">
                </div>
                <div class="form-group form-check">
                    <label for="lembrar" class="form-check-label">
                    <input id="lembrar" class="form-check-input" type="checkbox" name="lembrar" value="true"> Lembrar
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
<?php
                    if ($_POST){
                      if ($teste === 'false'){
                        echo "<b style='color:red;'>ERRO: email e/ou senha não conferem!</b>";
                      }
                    }
?>
            </form>
            <br>
            <a href="/projeto-integrador-6/confirmacaodesenha.php" target="_blank"><p>Esqueci minha senha</p>
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

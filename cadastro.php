<?php
session_start();
$_SESSION['email'] = $_POST['email'];
$_SESSION['nome'] = $_POST['nome'];

if ($_POST) {

    // CRIAR ARQUIVO COM OS DADOS DOS USUÁRIOS SALVOS NO FORMULÁRIO
      $local_file = "dados.json";
      if (file_exists($local_file)){
        $conteudo = file_get_contents ("$local_file");
        $conteudo_array = json_decode ($conteudo, true);
      } else {
        $conteudo_array = [
          "usuarios" => []
          ];
        }
        // VALIDAR SE O USUÁRIO JÁ EXISTE, UTILIZANDO O CAMPO E-MAIL
        $msg_error = [];
        $validacao = $conteudo_array['usuarios'];
        if ($validacao !== null) {
          foreach ($validacao as $key => $value) {
            if ($validacao[$key]['email'] === $_POST['email']) {
              $msg_error[] = "<b style='color:red;'>Já existe cadastro ativo com este e-mail!</b>";
              break;
            }
          }
        }

    // VALIDAR O PREENCHIMENTO DO FORMULÁRIO
      foreach ($_POST as $key => $value) {
        if ($value == ""){
          $msg_error[] = "Campo '$key' em branco";
        }
      }


    // VALIDAR "SENHA = CONFIRMAR SENHA" E APAGAR O CAMPO "CONFIRMAR SENHA" DO $_POST
    $senha = $_POST['senha'];
    $confimar = $_POST['confirmar'];

    if ($confimar !== $senha) {
      $msg_error[] = "Confirmação de senha não confere!";
    } else {
        $senha_cripto = password_hash($senha, PASSWORD_DEFAULT);
        $_POST['senha'] = $senha_cripto;
        unset ($_POST['confirmar']);

        // CARREGAR OS DADOS DO FORMULÁRIO CUMULATIVAMENTE(NA ÚLTIMA POSIÇÃO)
        // E SALVAR O ARQUIVO ACUMULADO NO ARQUIVO JSON ONDE TEM TODOS OS USUÁRIOS
        if (empty($msg_error)){
          $dadosUsuario = $_POST;
          $dadosUsuario['foto'] = $_FILES['arquivo']['name'];
          $conteudo_array ["usuarios"][] = $dadosUsuario;
          $conteudo = json_encode($conteudo_array);
          file_put_contents($local_file, $conteudo);

          header ('Location: validaCadastro.php');
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

      <!-- IMPRESSÃO DA MENSAGEM DE ERRO NO FINAL DA PÁGINA DE CADASTRO -->
            <div class="error">
              <?php
                if (isset($msg_error) && count($msg_error)) {
                  echo "<b  style='color:red;'>ATENÇÃO!</b>"."<br>";
                  echo implode ("<br>",$msg_error);
                }
              ?>
            </div>

        <div class = "col-xs-12" style="margin-bottom: 20px;">
          <h2>Formulário de Cadastro</h2>
        </div>

      <form class="form-inline" action="cadastro.php" method="post" enctype="multipart/form-data">

          <div class = "col-xs-12" style="margin-bottom: 20px">
                <div class="form-group col-lg-3 col-md-4 col-sm-5">
                    <label for="email" class="mr-sm-5">Email:</label><br>
                    <input type="email" name="email" class="form-control mr-sm-1" id="email" placeholder="Digite seu email" value='<?php echo isset($_POST['email'])?$_POST['email']:""?>' style="width: 100%">
                </div>
                <div class="form-group col-lg-2 col-md-3 col-sm-3">
                    <label for="senha"  class="mr-sm-2">Senha:</label><br>
                    <input type="password" name="senha" class="form-control mr-sm-2" id="senha" placeholder="Digite sua senha" style="width: 100%">
                </div>
                <div class="form-group col-lg-2 col-md-3 col-sm-3">
                    <label for="confirmar"  class="mr-sm-2">Confirmar Senha:</label><br>
                    <input type="password" name="confirmar" class="form-control mr-sm-2" id="confirmar" placeholder="Redigite sua senha" style="width: 100%">
                </div>
          </div>

          <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="nome" class="mr-sm-2">Nome:</label><br>
                  <input type="text" name="nome" class="form-control" id="nome" value='<?php echo isset($_POST['nome'])?$_POST['nome']:""?>' style="width: 100%">
              </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="sobrenome" class="mr-sm-2">Sobrenome:</label><br>
                  <input type="text"  name="sobrenome" class="form-control" id="sobrenome" value='<?php echo isset($_POST['sobrenome'])?$_POST['sobrenome']:""?>' style="width: 100%">
              </div>
              <div class="form-group col-lg-3 col-md-3 col-sm-3">
                  <label for="cpf">CPF:</label><br>
                  <input type="text" name="cpf"  class="form-control" id="cpf" value='<?php echo isset($_POST['cpf'])?$_POST['cpf']:""?>' style="width: 100%">
              </div>
          </div>

          <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-group col-lg-3">
                  <label for="telefone">Telefone:</label><br>
                  <input type="tel" name="telefone" class="form-control" id="telefone" value='<?php echo isset($_POST['telefone'])?$_POST['telefone']:""?>' style="width: 100%">
              </div>
              <div class="form-group col-lg-3">
                  <label for="celular">Celular:</label><br>
                  <input type="tel" name="celular" class="form-control" id="celular" value='<?php echo isset($_POST['celular'])?$_POST['celular']:""?>' style="width: 100%">
              </div>
          </div>

          <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-check-inline col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                <label><b>Sexo</label><br>
                <label class="checkbox-inline"><input type="radio" name="sexo" value="masculino">Masculino</label>
                <label class="checkbox-inline"><input type="radio" name="sexo" value="feminino">Feminino</label>
              </div>
              <div class="form-check-inline col-lg-4 col-md-5 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                <label><b>Áreas de Interesse</label><br>
                <label class="checkbox-inline"><input type="checkbox" name="interesse[]" value="maquiagem">Maquiagem</label>
                <label class="checkbox-inline"><input type="checkbox" name="interesse[]" value="perfumaria">Perfumaria</label>
                <label class="checkbox-inline"><input type="checkbox" name="interesse[]" value="cosmeticos">Cosméticos</label>
              </div>
          </div>

        <!-- UPLOAD FOTO DE PERFIL, comandos-->
          <div class="col-xs-12">
            <h5><strong>Selecione sua foto de perfil:</strong></h5>

            <input type="file" name="arquivo"  id="fileToUpload">
              <?php
                if ($_POST) {
                  $destino = 'uploads/' . $_FILES['arquivo']['name'];
                  $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                  move_uploaded_file($arquivo_tmp, $destino);
                }
              ?>
            <br><br>
          </div>

        <!-- botão enviar -->
          <div class = "col-xs-12" style="margin-bottom: 20px">
              <button type="submit" value="salvar" class="btn btn-primary  col-lg-1 col-md-1 col-sm-2 col-xs-3" >Enviar</button><br>
          </div>

      </form>

  </div>

<!-- FOOTER -->
  <?php include ("footer.php"); ?>

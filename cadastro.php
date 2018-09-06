<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>


  <?php include ("header.php"); ?>



    <div class="total col-lg-12 ">

        <div class = "col-xs-12" style="margin-bottom: 20px; margin-top: 30px;">
        <h2>Formulário de Cadastro</h2>
        </div>

        <form class="form-inline" action="/action_page.php" method="post">

          <div class = "col-xs-12" style="margin-bottom: 20px">
                <div class="form-group col-lg-4 col-md-5 col-sm-6">
                    <label for="email" class="mr-sm-5">Email:</label><br>
                    <input type="email" name="email" class="form-control mr-sm-1" id="email" style="width: 100%" placeholder="Digite seu email" name="email">
                </div>
                <div class="form-group col-lg-2 col-md-3 col-sm-4">
                    <label for="pwd"  class="mr-sm-2">Senha:</label><br>
                    <input type="password" name="pwd" class="form-control mr-sm-2" id="pwd" style="width: 100%" placeholder="Digite sua senha" name="pswd">
                </div>
        </div>

        <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="nome" class="mr-sm-2">Nome:</label><br>
                  <input type="text" name="nome" class="form-control" style="width: 100%" id="nome">
              </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                  <label for="sobrenome" class="mr-sm-2">Sobrenome:</label><br>
                  <input type="text"  name="sobrenome" class="form-control" style="width: 100%" id="sobrenome">
              </div>
              <div class="form-group col-lg-3 col-md-3 col-sm-3">
                  <label for="cpf">CPF:</label><br>
                  <input type="text" name="cpf"  class="form-control" style="width: 100%" id="cpf">
              </div>
        </div>

        <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-group col-lg-3">
                  <label for="celular">Telefone:</label><br>
                  <input type="text" name="celular" class="form-control" style="width: 100%" id="celular">
              </div>
              <div class="form-group col-lg-3">
                  <label for="celular">Celular:</label><br>
                  <input type="text" name="celular" class="form-control"  style="width: 100%" id="celular">
              </div>
        </div>

        <div class = "col-xs-12" style="margin-bottom: 20px">
              <div class="form-check-inline col-lg-4 col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                <label><b>Sexo</label><br>
                <label class="checkbox-inline"><input type="radio" name="sexo" value="1">Masculino</label>
                <label class="checkbox-inline"><input type="radio" name="sexo" value="2">Feminino</label>
              </div>
              <div class="form-check-inline col-lg-4 col-md-5 col-sm-6 col-xs-12" style="margin-bottom: 20px;">
                <label><b>Áreas de Interesse</label><br>
                <label class="checkbox-inline"><input type="checkbox" value="1">Maquiagem</label>
                <label class="checkbox-inline"><input type="checkbox" value="2">Perfumaria</label>
                <label class="checkbox-inline"><input type="checkbox" value="3">Cosméticos</label>
              </div>
        </div>

        <div class = "col-xs-12" style="margin-bottom: 20px">
              <button type="submit" class="btn btn-primary  col-lg-1 col-md-1 col-sm-2 col-xs-3" >Enviar</button><br>
        </div>

    </form>

  </div>

<!-- FOOTER -->
  <?php include ("footer.php"); ?>

    

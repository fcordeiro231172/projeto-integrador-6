<?php
session_start();


$local_file = "dados.json";
$conteudo = file_get_contents ($local_file);
$conteudo_array = json_decode ($conteudo, true);
$dadosUsuario = [];

  foreach ($conteudo_array['usuarios'] as $key => $value) {
    echo $conteudo_array['usuarios'][$key]['email'];
    if ($conteudo_array['usuarios'][$key]['email'] === $_SESSION['email']) {
      $dadosUsuario = $conteudo_array['usuarios'][$key];
    }
  }

?>

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>

  <?php include ("header.php"); ?>


  <div class="col-xs-12" style="margin:150px 0 200px 50px;">
    <h1>Meu Perfil</h1>
      <?php
      // echo $_SESSION['email'];
      foreach ($dadosUsuario as $key => $value) {
        if(is_array($value)){
          echo "$key <br>";
          foreach ($value as $key => $val) {
            echo "$val<br>";
          }
        }else{
          echo "$value <br>";
        }
      }


      ?>

    <div class="editar">
        <br>
        <a href="editarCadastro.php">Editar meu cadastro</a>
    </div>

  </div>

<!-- FOOTER -->
  <?php include ("footer.php"); ?>

<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>

  <?php include ("header.php"); ?>


  <div class="" style="margin:200px 0 200px 50px;">
      <?php
        echo "Cadastro realizado com sucesso!"."<br>";

        echo "Bem-vindo(a), ".$_SESSION['nome'];
      ?>
      <br>
      <a href="login.php">Clique aqui</a> para fazer seu login!
  </div>


<!-- FOOTER -->
  <?php include ("footer.php"); ?>

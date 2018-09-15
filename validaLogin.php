<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>

  <?php include ("header.php"); ?>


  <div class="col-xs-12" style="margin:200px 0 200px 50px;">
      <?php
        echo "Login realizado com sucesso!"."<br>";
        echo "Bem-vindo(a), ".$_SESSION['nome'];
        echo "<br><br>";

      ?>
  </div>

<!-- FOOTER -->
  <?php include ("footer.php"); ?>

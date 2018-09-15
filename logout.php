<?php
session_start();
unset($_SESSION['logado']);
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>

  <?php include ("header.php"); ?>


  <div class="col-xs-12" style="margin:200px 0 200px 50px;">
      <?php
        echo "Até breve!";
      ?>
  </div>

<!-- FOOTER -->
  <?php include ("footer.php"); ?>

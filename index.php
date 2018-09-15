<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
  <title>Integrador-6</title>
  <link rel="stylesheet" href="includes/banner/banner.css"> <!-- CSS BANNER -->
  <link rel="stylesheet" href="includes/vitrine/vitrine.css">  <!-- CSS VITRINE -->


  <?php include ("header.php"); ?>



    <!-- BANNER -->
    <?php include ("includes/banner/banner.php"); ?>

    <!-- VITRINE -->
   <div id="vitrine-produtos">
    <?php include ("includes/vitrine/vitrine.php");?>
   </div>

    <!-- FOOTER -->

      <?php include ("footer.php"); ?>

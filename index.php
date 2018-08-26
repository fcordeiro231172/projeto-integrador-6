<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Integrador-6</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="includes/banner/banner.css"> <!-- CSS BANNER -->
  <link rel="stylesheet" href="includes/vitrine/vitrine.css">  <!-- CSS VITRINE -->
  <link rel="stylesheet" href="css/home-responsive.css">  <!-- HOME-RESPONSIVA -->
</head>

<body>
  <div class="container-fluid">

    <!-- HEADER -->
    <header>
      <?php include ("header.php"); ?>
    </header>

    <!-- BANNER -->
    <?php include ("includes/banner/banner.php"); ?>

    <!-- VITRINE -->
   <div id="vitrine-produtos">
    <?php include ("includes/vitrine/vitrine.php");?>
   </div>

    <!-- FOOTER -->
    <footer>
      <?php include ("footer.php"); ?>
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

<?php
session_start();

if(!isset($_SESSION['id'])) {
  header("Location: haldus.php");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin panel</title>
      <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.css">
      <script src="../../resources/bootstrap/js/jquery-3.1.0.min.js"></script>
      <script src="../../resources/bootstrap/js/jquery-3.1.0.js"></script>
      <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
        <div class="jumbotron">
            <h1>Valikud</h1>
<form action="logout.php" method="post">
  <input type="submit" class="btn btn-primary" name="logout" value="Logi välja"/><br><br>
</form>
<form action="kysimused.php" method="post">
  <input type="submit" class="btn btn-primary" name="kysimused" value="Muuda küsimusi"/>
</form>
<form action="hindamine.php" method="post">
  <input type="submit" class="btn btn-primary" name="hindamine" value="Hindamine"/>
</form>
    </div>
  </div>
  </body>
</html>

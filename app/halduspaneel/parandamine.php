<?php
session_start();

if(!isset($_SESSION['id'])) {
  header("Location: haldus.php");
}
include '../../resources/mysql.php';


$query = "select Lahendus from tulemused where Kasutaja_ID = 2";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result);
$url = $row['Lahendus'];
include $url;
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>parandamine</title>
  </head>
  <body>
    <?php
      echo file_get_contents('../'.$url);

     ?>
     <br>
     <br>
     <br>
     <form action="punktidPraktiline" method="post">
       <input type="number" placeholder="Praktilise ül punktid">
     </form>
     <br>
     <form action="menu.php" method="post">
       <input type="submit" name="tagasi" value="Tagasi">
     </form>
  </body>
</html>

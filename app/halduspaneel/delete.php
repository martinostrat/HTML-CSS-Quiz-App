<?php
include_once("../../resources/mysql.php");
$sql = "delete from kysimused where id = '".$_POST["id"]."'";
if(mysqli_query($link, $sql)) {
  echo 'Küsimus kustutatud!';
}
 ?>

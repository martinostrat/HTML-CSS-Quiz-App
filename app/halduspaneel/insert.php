<?php
require_once("../../resources/mysql.php");
$sql = "insert into kysimused (kysimus, A, B, C, vastus) values ('".$_POST["kysimus"]."', '".$_POST["A"]."', '".$_POST["B"]."', '".$_POST["C"]."', '".$_POST["vastus"]."')";
if(mysqli_query($link, $sql)) {
  echo 'Andmed sisestatud';
}
 ?>

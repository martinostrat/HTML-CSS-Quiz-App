<?php
include_once("../../resources/mysql.php");
$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];

$sql = "update kysimused set ".$column_name."='".$text."' where id='".$id."'";
if(mysqli_query($link, $sql)) {
  echo "Andmed muudetud!";
}
 ?>

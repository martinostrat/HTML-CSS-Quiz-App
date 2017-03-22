<?php
session_start();
include 'mysql.php';
$content = $_GET["content"];
$file = uniqid() . ".php";
file_put_contents($file, $content);
echo $file;


$userIsik = $_SESSION['currentUser'];
$query = "update tulemused set Lahendus = '$file' where Kasutaja_ID = '$userIsik'";
if ($link->query($query) === TRUE) {
} else {
  echo $sql . $link->error;
}
?>

<?php
include '../../resources/mysql.php';

$punktid = $_POST['punkt'];
$url = $_POST['url'];

$query = "update tulemused set Punkte_praktiline = '$punktid' where Lahendus like '$url'";
mysqli_query($link, $query);

$teooriaSQL = "select Punkte_teooria from tulemused where Lahendus like '$url'";
$teooriaQuery = mysqli_query($link, $teooriaSQL);
$tp = mysqli_fetch_array($teooriaQuery);
$teooriaKokku = $tp['Punkte_teooria'];

$praktilineSQL = "select Punkte_praktiline from tulemused where Lahendus like '$url'";
$praktilineQuery = mysqli_query($link, $praktilineSQL);
$pp = mysqli_fetch_array($praktilineQuery);
$praktilineKokku = $pp['Punkte_praktiline'];

$kokku = $teooriaKokku + $praktilineKokku;

$kokkuQuery = "update tulemused set Punkte_kokku = '$kokku' where Lahendus like '$url'";
mysqli_query($link, $kokkuQuery);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>back</title>
   </head>
   <body>
     <meta http-equiv="refresh" content="1;url=hindamine.php"/>
   </body>
 </html>

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
     <title>back</title>
   </head>
   <body>
     <meta http-equiv="refresh" content="1;url=hindamine.php"/>
   </body>
 </html>

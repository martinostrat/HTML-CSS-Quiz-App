<?php
session_start();

if(isset($_POST['login'])) {
  include_once("../../resources/mysql.php");

  $username = strip_tags($_POST['uname']);
  $password = strip_tags($_POST['passw']);

  $username = stripslashes($username);
  $password = stripslashes($password);

  $username = mysqli_real_escape_string($link, $username);
  $password = mysqli_real_escape_string($link, $password);


  $sql = "select * from admin where username = '$username'";
  $query = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($query);
  $id = $row['id'];
  $db_pass = $row['password'];

  if ($password == $db_pass) {
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $id;
    header("Location: admin.php");
  } else {
    header("Location: haldus.php");
  }
}


 ?>

<?php
header('Location: ./praktiline.php');
include 'mysql.php';
include 'kys.php';
/* User submitted answers */
$answer1 = $_POST[1];
$answer2 = $_POST[2];
$answer3 = $_POST[3];
$answer4 = $_POST[4];
$answer5 = $_POST[5];
$answer6 = $_POST[6];
$answer7 = $_POST[7];
$answer8 = $_POST[8];
$answer9 = $_POST[9];
$answer10 = $_POST[10];
/* Construct a query */
$q1 = "select vastus from kysimused where id = '".$_POST[11]."';";
$q2 = "select vastus from kysimused where id = '".$_POST[12]."';";
$q3 = "select vastus from kysimused where id = '".$_POST[13]."';";
$q4 = "select vastus from kysimused where id = '".$_POST[14]."';";
$q5 = "select vastus from kysimused where id = '".$_POST[15]."';";
$q6 = "select vastus from kysimused where id = '".$_POST[16]."';";
$q7 = "select vastus from kysimused where id = '".$_POST[17]."';";
$q8 = "select vastus from kysimused where id = '".$_POST[18]."';";
$q9 = "select vastus from kysimused where id = '".$_POST[19]."';";
$q10 = "select vastus from kysimused where id = '".$_POST[20]."';";
/* Query DB */
$tulemus1 = mysqli_query($link, $q1);
$tulemus2 = mysqli_query($link, $q2);
$tulemus3 = mysqli_query($link, $q3);
$tulemus4 = mysqli_query($link, $q4);
$tulemus5 = mysqli_query($link, $q5);
$tulemus6 = mysqli_query($link, $q6);
$tulemus7 = mysqli_query($link, $q7);
$tulemus8 = mysqli_query($link, $q8);
$tulemus9 = mysqli_query($link, $q9);
$tulemus10 = mysqli_query($link, $q10);
/* Assign result array to a variable */
$oige1 = mysqli_fetch_array($tulemus1);
$oige2 = mysqli_fetch_array($tulemus2);
$oige3 = mysqli_fetch_array($tulemus3);
$oige4 = mysqli_fetch_array($tulemus4);
$oige5 = mysqli_fetch_array($tulemus5);
$oige6 = mysqli_fetch_array($tulemus6);
$oige7 = mysqli_fetch_array($tulemus7);
$oige8 = mysqli_fetch_array($tulemus8);
$oige9 = mysqli_fetch_array($tulemus9);
$oige10 = mysqli_fetch_array($tulemus10);
/* Check if submitted answer matches correct answer */
$totalCorrect = 0;
if ($answer1 == $oige1["vastus"]) { $totalCorrect++; }
if ($answer2 == $oige2["vastus"]) { $totalCorrect++; }
if ($answer3 == $oige3["vastus"]) { $totalCorrect++; }
if ($answer4 == $oige4["vastus"]) { $totalCorrect++; }
if ($answer5 == $oige5["vastus"]) { $totalCorrect++; }
/*if ($answer6 == $oige6["vastus"]) { $totalCorrect++; }
if ($answer7 == $oige7["vastus"]) { $totalCorrect++; }
if ($answer8 == $oige8["vastus"]) { $totalCorrect++; }
if ($answer9 == $oige9["vastus"]) { $totalCorrect++; }
if ($answer10 == $oige10["vastus"]) { $totalCorrect++; }*/


// Insert score to DB
$userIsik = $_SESSION['currentUser'];
$resultQuery = "insert into tulemused set Kasutaja_ID = (select isikukood from kasutajad where isikukood = '$userIsik'),
Nimi = (select concat(kasutajad.eesnimi, ' ', kasutajad.perenimi) AS Nimi from kasutajad where isikukood = '$userIsik'), Punkte_teooria = '$totalCorrect'";
if ($link->query($resultQuery) === TRUE) {
} else {
  echo $sql . $link->error;
}

?>

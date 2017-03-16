<?php
// DB Connection
include '../resources/mysql.php';
/* MySQL Query */
  $pointsQuery = "select kasutajad.eesnimi, kasutajad.perenimi, tulemused.Punkte_teooria from kasutajad inner join tulemused on kasutajad.id=tulemused.kasutaja_ID order by tulemused.Punkte_teooria desc limit 10";
/* Query DB */
  $pointsResult = mysqli_query($link, $pointsQuery);
/* Top 10 placeCounter */
  $placeCounter = 0;
/* Generate Top10 table */
  while ($row = mysqli_fetch_array($pointsResult)) {
    $placeCounter++;
    echo "<tr><td>" . $placeCounter . "</td><td>" . $row["eesnimi"] . ' ' . $row["perenimi"] . "</td><td>" . $row["Punkte_teooria"] . "</td>";
  }
 ?>

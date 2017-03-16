<?php
session_start();

if(!isset($_SESSION['id'])) {
  header("Location: haldus.php");
}
include '../../resources/mysql.php';
$query = "select * from tulemused order by Kasutaja_ID asc";
$result = mysqli_query($link, $query);
$output = '';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hindamine</title>
    <link rel="stylesheet" href="../../resources/bootstrap/css/bootstrap.css">
    <script src="../../resources/bootstrap/js/jquery-3.1.0.js"></script>
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php
    $output .= '
    <div class="table-responsive">
      <table class="table table-bordered">
        <tr>
          <th width="5%">Kasutaja_ID</th>
          <th width="25%">Nimi</th>
          <th width="20%">Lahendus</th>
          <th width="20%">Punkte Teooria</th>
          <th width="20%">Punkte Praktiline</th>
          <th width="10%">Punkte Kokku</th>
        </tr>';
    while($row = mysqli_fetch_array($result)) {
      $output .= '
            <tr>
                <td>'.$row["Kasutaja_ID"].'</td>
                  <td>'.$row["Nimi"].'</td>
                  <td><a href="../'.$row["Lahendus"].'">'.$row["Lahendus"].'</a></td>
                  <td>'.$row["Punkte_teooria"].'</td>
                  <td>'.$row["Punkte_praktiline"].'</td>
                  <td>'.$row["Punkte_kokku"].'</td>
            </tr>
      ';
    }
    $output .= '</table>
      </div>';
      echo $output;
    ?>
    <form action="tagasi.php" method="post">
      <input type="submit" name="tagasi" value="Tagasi">
    </form>
  </body>
</html>

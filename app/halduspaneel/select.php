<?php
include_once("../../resources/mysql.php");
$output = '';
$sql = "select * from kysimused order by id asc";
$result = mysqli_query($link, $sql);
$output .= '
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th width="5%">ID</th>
      <th width="25%">Küsimus</th>
      <th width="20%">A</th>
      <th width="20%">B</th>
      <th width="20%">C</th>
      <th width="5%">Vastus</th>
      <th width="5%">Kustuta</th>
    </tr>';
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_array($result)) {
    $output .= '
          <tr>
              <td>'.$row["id"].'</td>
                <td class="kysimus" data-id1="'.$row["id"].'" contenteditable>'.$row["kysimus"].'</td>
                <td class="A" data-id2="'.$row["id"].'" contenteditable>'.$row["A"].'</td>
                <td class="B" data-id3="'.$row["id"].'" contenteditable>'.$row["B"].'</td>
                <td class="C" data-id4="'.$row["id"].'" contenteditable>'.$row["C"].'</td>
                <td class="vastus" data-id5="'.$row["id"].'" contenteditable>'.$row["vastus"].'</td>
                <td><button type="button" name="delete_btn" data-id6="'.$row["id"].'" class ="btn btn-xs btn-danger btn_delete">X</button></td>
          </tr>
    ';
  }
  $output .= '
  <tr>
    <td></td>
    <td id="kysimus" contenteditable></td>
    <td id="A" contenteditable></td>
    <td id="B" contenteditable></td>
    <td id="C" contenteditable></td>
    <td id="vastus" contenteditable></td>
    <td><button name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
  </tr>
  ';
} else {
  $output .= '<tr>
    <td colspan="7">Andmeid ei leitud</td>
  </tr>';
}
$output .= '</table>
  </div>';
  echo $output;
 ?>

<?php
session_start();

if(!isset($_SESSION['currentUser'])) {
  header("Location: pea.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Aasta tegija</title>
    <link rel="stylesheet" href="../resources/login.css">
    <link rel="stylesheet" type="text/css" href="../resources/Header-Nightsky.css">
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <script src="../resources/bootstrap/js/jquery-3.1.0.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/showOne.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script type="text/javascript">
    // Cant submit quiz unles last answer is selected
    $(document).ready(function () {
      $('#A').click(function () {
          if ($(this).is(':checked')) {
              document.getElementById("subButton").disabled = false;
          }
      });
      $('#B').click(function () {
          if ($(this).is(':checked')) {
              document.getElementById("subButton").disabled = false;
          }
      });
      $('#C').click(function () {
          if ($(this).is(':checked')) {
              document.getElementById("subButton").disabled = false;
          }
      });
    });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="hero">
                <h1 class="kys-h1">
                    TEOREETILISED KÜSIMUSED
                </h1>
            </div>
            <div class="questions">
              <form id="myForm" action="grade2.php" method="post">
                <!-- Get questions from DB -->
                <?php
                include '../resources/mysql.php';
                $query = "select id, kysimus, A, B, C, vastus from kysimused order by rand() limit 5;";
                $result = mysqli_query($link, $query);
                $counter = 0;
                $name = 10;
                ?>
                <!-- Question 1 -->
                <div id="question1" class="questions" data-toggle="buttons">
                  <?php $counter++;
                   $name++;
                   $row = mysqli_fetch_array($result);
                    echo "<h3>" . $row["kysimus"] . "</h3>" .
                    "<input type='hidden' value='" . $row[id] . "' name='" . $name . "'" .  "<br />" .
                    "<label class='valik btn btn-primary'><input class='ques1' type='radio' name='" . $counter . "' value='A' />" . $row[A] . "</label><br />" .
                    "<label class='valik btn btn-primary'><input class='ques1' type='radio' name='" . $counter . "' value='B' />" . $row[B] . "</label><br />" .
                    "<label class='valik btn btn-primary'><input class='ques1' type='radio' name='" . $counter . "' value='C' />" . $row[C] . "</label><br />";
                   ?>
                  <button type="button" class="btn btn-secondary" onclick="showQ1();">Järgmine</button>
                </div>
                <!-- Question 2 -->
                  <div id="question2" class="questions" data-toggle="buttons">
                      <?php $counter++;
                      $name++;
                      $row = mysqli_fetch_array($result);
                      echo "<h3>" . $row["kysimus"] . "</h3>" .
                          "<input type='hidden' value='" . $row[id] . "' name='" . $name . "'" .  "<br />" .
                          "<label class='valik btn btn-primary'><input class='ques2' type='radio' name='" . $counter . "' value='A' />" . $row[A] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques2' type='radio' name='" . $counter . "' value='B' />" . $row[B] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques2' type='radio' name='" . $counter . "' value='C' />" . $row[C] . "</label><br />";
                      ?>
                      <button type="button" class="btn btn-secondary" onclick="showQ2();">Järgmine</button>
                  </div>
                <!-- Question 3 -->
                  <div id="question3" class="questions" data-toggle="buttons">
                      <?php $counter++;
                      $name++;
                      $row = mysqli_fetch_array($result);
                      echo "<h3>" . $row["kysimus"] . "</h3>" .
                          "<input type='hidden' value='" . $row[id] . "' name='" . $name . "'" .  "<br />" .
                          "<label class='valik btn btn-primary'><input class='ques3' type='radio' name='" . $counter . "' value='A' />" . $row[A] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques3' type='radio' name='" . $counter . "' value='B' />" . $row[B] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques3' type='radio' name='" . $counter . "' value='C' />" . $row[C] . "</label><br />";
                      ?>
                      <button type="button" class="btn btn-secondary" onclick="showQ3();">Järgmine</button>
                  </div>
                <!-- Question 4 -->
                  <div id="question4" class="questions" data-toggle="buttons">
                      <?php $counter++;
                      $name++;
                      $row = mysqli_fetch_array($result);
                      echo "<h3>" . $row["kysimus"] . "</h3>" .
                          "<input type='hidden' value='" . $row[id] . "' name='" . $name . "'" .  "<br />" .
                          "<label class='valik btn btn-primary'><input class='ques4' type='radio' name='" . $counter . "' value='A' />" . $row[A] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques4' type='radio' name='" . $counter . "' value='B' />" . $row[B] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques4' type='radio' name='" . $counter . "' value='C' />" . $row[C] . "</label><br />";
                      ?>
                      <button type="button" class="btn btn-secondary" onclick="showQ4();">Järgmine</button>
                  </div>
                <!-- Question 5 -->
                  <div id="question5" class="questions" data-toggle="buttons">
                      <?php $counter++;
                      $name++;
                      $row = mysqli_fetch_array($result);
                      echo "<h3>" . $row["kysimus"] . "</h3>" .
                          "<input type='hidden' value='" . $row[id] . "' name='" . $name . "'" .  "<br />" .
                          "<label class='valik btn btn-primary'><input class='ques5' type='radio' name='" . $counter . "' value='A' />" . $row[A] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques5' type='radio' name='" . $counter . "' value='B' />" . $row[B] . "</label><br />" .
                          "<label class='valik btn btn-primary'><input class='ques5' type='radio' name='" . $counter . "' value='C' />" . $row[C] . "</label><br />";
                      ?>

                </div>
                  <input type="submit" class="btn btn-success" value="Vasta" id="subButton" />
              </form>
            </div> <!-- /.questions -->
        </div> <!-- /row -->
    </div> <!-- /container -->
</body>

</html>

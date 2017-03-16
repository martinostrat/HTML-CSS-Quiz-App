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
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../resources/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="../resources/codemirror/theme/neat.css">
    <script src="../resources/bootstrap/js/jquery-3.1.0.js"></script>
    <script src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <script src="../resources/codemirror/lib/codemirror.js"></script>
    <script src="../resources/codemirror/mode/javascript/javascript.js"></script>
    <script src="../resources/codemirror/mode/xml/xml.js"></script>
    <script src="../resources/editor.js"></script>
</head>

<body>
    <!-- Main container -->
    <div class="container">
      <div class="questions">
        <?php
        include '../resources/mysql.php';
        $query = "select * from praktiline_yl order by rand() limit 1;";
        $sql = mysqli_query($link, $query);
        $row = mysqli_fetch_array($sql);
        echo '<h3 class="text-center">'.$row['ylesanne'].'</h3>'
        ?>
      </div>
      <form id="myForm" method="post" action="">
        <!-- Textarea for CodeMirror -->
          <br>
        <textarea name="code" id="editor" disabled="disabled"></textarea><br>
        <button class="btn btn-warning" id="sub" onclick="updatePreview()">Kinnita</button>
      </form>
      <!-- CodeMirror result -->
      <iframe id="preview"></iframe>
      <form action="end.php" method="post">

        <input type="submit" name="done" value="Välju" id="endButton">
      </form>
    </div>
    <!-- Initialize CodeMirror -->
    <script>
        var delay;
        // Initialize CodeMirror editor with a nice html5 canvas demo.
        var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
            mode: 'text/html',
            tabMode: 'indent',
            lineNumbers: true
        });
    </script>

</body>

</html>

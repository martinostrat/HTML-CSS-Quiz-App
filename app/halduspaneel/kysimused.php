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
    <title>Muuda küsimusi</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery-3.1.0.js"></script>
    <script src="../../resources/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="table-responsive">
        <div id="live_data">
        </div>
      </div>
      <form action="tagasi.php" method="post">
        <input type="submit" name="tagasi" value="Tagasi">
      </form>
    </div>
  </body>
</html>
<script>
$(document).ready(function(){
    function fetch_data()
    {
         $.ajax({
              url:"select.php",
              method:"POST",
              success:function(data){
                   $('#live_data').html(data);
              }
         });
    }
    fetch_data();
    $(document).on('click', '#btn_add', function() {
      var kysimus = $('#kysimus').text();
      var a = $('#A').text();
      var b = $('#B').text();
      var c = $('#C').text();
      var vastus = $('#vastus').text();
      if(kysimus == '') {
        alert("Sisesta küsimus!");
        return false;
      }
      if(a == '') {
        alert("Sisesta A!");
        return false;
      }
      if(b == '') {
        alert("Sisesta B!");
        return false;
      }
      if(c == '') {
        alert("Siesta C!");
        return false;
      }
      if(vastus == '') {
        alert("Sisesta vastus");
        return false;
      }
      $.ajax({
        url:"insert.php",
        method:"POST",
        data:{kysimus:kysimus, A:a, B:b, C:c, vastus:vastus},
        dataType:"text",
        success:function(data){
          alert(data);
          fetch_data();
        }
      })
    });

    function edit_data(id, text, column_name) {
      $.ajax({
        url:"edit.php",
        method:"POST",
        data:{id:id, text:text, column_name:column_name},
        dataType:"text",
        success:function(data){
          alert(data);
        }
      });
    }

    $(document).on('blur', '.kysimus', function() {
      var id = $(this).data("id1");
      var kysimus = $(this).text();
      edit_data(id, kysimus, "kysimus");
    });

    $(document).on('blur', '.A', function() {
      var id = $(this).data("id2");
      var a = $(this).text();
      edit_data(id, a, "A");
    });

    $(document).on('blur', '.B', function() {
      var id = $(this).data("id3");
      var b = $(this).text();
      edit_data(id, b, "B");
    });

    $(document).on('blur', '.C', function() {
      var id = $(this).data("id4");
      var c = $(this).text();
      edit_data(id, c, "C");
    });

    $(document).on('blur', '.vastus', function() {
      var id = $(this).data("id5");
      var vastus = $(this).text();
      edit_data(id, vastus, "vastus");
    });

    $(document).on('click', '.btn_delete', function() {
      var id = $(this).data("id6");
      if(confirm("Kindel, et tahate küsimust kustutada?")) {
        $.ajax({
          url:"delete.php",
          method:"POST",
          data:{id:id},
          dataType:"text",
          success:function(data) {
            alert(data);
            fetch_data();
          }
        });
      }
    });
  });
</script>

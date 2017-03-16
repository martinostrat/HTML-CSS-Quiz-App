function updatePreview() {
  var previewFrame = document.getElementById('preview');
  var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
  preview.open();
  preview.write(editor.getValue());
  preview.close();
  $("#myForm").css("display", "none");
  $("#preview").css("display", "block");
  $("#sub").prop("disabled", "true");
  $("#sub").css("display", "none");
  $("#endButton").css("display", "block");
  var res = editor.getValue();
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function(){
  if(xmlhttp.readyState==4 && xmlhttp.status==200)
      alert("webpage " + xmlhttp.responseText + " was successfully created!");
  }
  var content = `
    <html><head></head><body>
    <div style="border:3px solid black;"><xmp>`+res+`</xmp></div>
    <br>
    <form action="../app/halduspaneel/punktidPraktiline.php" method="post">
      <input type="hidden" name="url" value="<?php echo basename($_SERVER['PHP_SELF']); ?>"/>
      <input name="punkt" type="number" placeholder="Praktilise ül punktid">
      <input type="submit" value="Hinda">
    </form>
    <br>
    <form action="../app/halduspaneel/menu.php" method="post">
      <input type="submit" name="tagasi" value="Tagasi">
    </form>
    </body></html>
    `;
  xmlhttp.open("GET","makePage.php?content=" + content,true);
  xmlhttp.send();
}

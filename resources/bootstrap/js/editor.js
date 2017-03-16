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
  var content = res;
  xmlhttp.open("GET","makePage.php?content=" + content,true);
  xmlhttp.send();
}

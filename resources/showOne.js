function _(id) {
  return document.getElementById(id);
}

function showQ1() {
  if ($('.ques1').is(':checked')) {
    _("question1").style.display = "none";
    _("question2").style.display = "block";
  } else {
    alert('Vasta küsimusele!');
  }
}

function showQ2() {
  if ($('.ques2').is(':checked')) {
    _("question2").style.display = "none";
    _("question3").style.display = "block";
  } else {
    alert('Vasta küsimusele!');
  }
}

function showQ3() {
  if ($('.ques3').is(':checked')) {
    _("question3").style.display = "none";
    _("question4").style.display = "block";
  } else {
    alert('Vasta küsimusele!');
  }
}

function showQ4() {
  if ($('.ques4').is(':checked')) {
    _("question4").style.display = "none";
    _("question5").style.display = "block";
  } else {
    alert('Vasta küsimusele!');
  }
}

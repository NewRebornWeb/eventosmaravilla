// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");
var modal7 = document.getElementById("myModal7");
var modal8 = document.getElementById("myModal8");

var cuerpo = document.body;

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");
var btn7 = document.getElementById("myBtn7");
var btn8 = document.getElementById("myBtn8");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close")[1];
var span3 = document.getElementsByClassName("close")[2];
var span4 = document.getElementsByClassName("close")[3];
var span5 = document.getElementsByClassName("close")[4];
var span6 = document.getElementsByClassName("close")[5];
var span7 = document.getElementsByClassName("close")[6];
var span8 = document.getElementsByClassName("close")[7];

// When the user clicks on the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn2.onclick = function () {
  modal2.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn3.onclick = function () {
  modal3.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn4.onclick = function () {
  modal4.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn5.onclick = function () {
  modal5.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn6.onclick = function () {
  modal6.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn7.onclick = function () {
  modal7.style.display = "block";
  cuerpo.style.overflow = "hidden";
};
btn8.onclick = function () {
  modal8.style.display = "block";
  cuerpo.style.overflow = "hidden";
};

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span2.onclick = function () {
  modal2.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span3.onclick = function () {
  modal3.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span4.onclick = function () {
  modal4.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span5.onclick = function () {
  modal5.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span6.onclick = function () {
  modal6.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span7.onclick = function () {
  modal7.style.display = "none";
  cuerpo.style.overflow = "visible";
};
span8.onclick = function () {
  modal8.style.display = "none";
  cuerpo.style.overflow = "visible";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal3) {
    modal3.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal4) {
    modal4.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal5) {
    modal5.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal6) {
    modal6.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal7) {
    modal7.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
  if (event.target == modal8) {
    modal8.style.display = "none";
    cuerpo.style.overflow = "visible";
  }
};

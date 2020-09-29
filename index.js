$(document).ready(function(RevealFAQ){
  $("#SmallMenuOpen").click(function(RevealFAQ){
    $("#SmallMenu").slideToggle("slow");
  });
});



window.onscroll = function() {KeepAtTop()};

var header = document.getElementById("Menu","SmallMenuOpen");
var topmenu = header.offsetTop;

function KeepAtTop() {
  if (window.pageYOffset > topmenu) {
    header.classList.add("topmenu");
  } else {
    header.classList.remove("topmenu");
  }
}



///Slideshow JS

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 7000);
}

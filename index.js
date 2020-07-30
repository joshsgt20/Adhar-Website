$(document).ready(function(RevealFAQ){
  $("#SmallMenuOpen").click(function(RevealFAQ){
    $("#SmallMenu").slideToggle("slow");
  });
});


///Slideshow JS
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("Slideshow");
  var Dots = document.getElementsByClassName("Dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < Dots.length; i++) {
    Dots[i].className = Dots[i].className.replace(" background", "");
  }
  slides[slideIndex-1].style.display = "block";
  Dots[slideIndex-1].className += " background";
  setTimeout(showSlides, 8000);
}

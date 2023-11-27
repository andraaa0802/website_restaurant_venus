var manualSlideIndex = 1;
function plusSlides(n) {
  showSlides(manualSlideIndex += n);
}

function currentSlide(n) {
  showSlides(manualSlideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides fade");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {manualSlideIndex = 1}
  if (n < 1) {manualSlideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[manualSlideIndex-1].style.display = "block";
  dots[manualSlideIndex-1].className += " active";
}
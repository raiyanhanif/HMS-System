// main-crousel

let index = 0;
const slides = document.getElementsByClassName('slide');

function showSlide() {
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = 'none';
  }
  index = (index + 1) % slides.length;
  slides[index].style.display = 'block';
}

function startCarousel() {
  setInterval(showSlide, 2000); // Change image every 2 seconds (2000 milliseconds)
}

startCarousel();


   
// patient syays crousel

    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

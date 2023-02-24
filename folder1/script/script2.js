var slideshow = document.getElementById("slideshow");
var slides = slideshow.getElementsByClassName("slide");
var currentSlide = 0; 
function showSlide() {
for (var i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
slides[currentSlide].style.display = "block";
currentSlide = (currentSlide + 1) % slides.length;
}
setInterval(showSlide, 5000);
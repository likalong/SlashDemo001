/**
 * Created by htpp royal on 08/28/2017.
 */

var slideIndex = 1;
var dots = document.getElementsByClassName("dot");
showSlides(slideIndex);
function plusDivs(n) {
    showDivs(slideIndex += n);
}
// function for click next and prev
function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slide-contain");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" make-background", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " make-background";
}
// for Automatical slide

function plusSlides(n) {
    showSlides(slideIndex += n);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide-contain");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        slides[slideIndex-1].className.replace("fade","");
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" make-background", "");// it replace class active to dots as empty class active with dot
    }
    slides[slideIndex-1].style.display = "block";
    slides[slideIndex-1].className+= " fade";
    dots[slideIndex-1].className += " make-background";
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    setTimeout(showSlides,10000); // Change image every 10 seconds*/

}

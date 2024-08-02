/*----------------------------category*---------------/ */
function openCategory(evt, categoryname) {
    slideIndex = 1;
    showSlides(slideIndex);
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(categoryname).style.display = "flex";
    evt.currentTarget.className += " active";
    // document.getElementById("defaultOpen").click();
}


/*-------------------------------slider tab----------------------------*/

let slideIndex = 1;
let count = slideIndex;
showSlides(slideIndex);
function plusSlides(n) {
    count = count + n;
    if (count > 3) {
      slideIndex = 0;
      count = 1;  
    }
    showSlides(slideIndex += n);
    console.log(slideIndex);
}
function currentSlide(n) {
    showSlides(slideIndex = n);
}
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[slideIndex-1].style.display = "flex"; 
}
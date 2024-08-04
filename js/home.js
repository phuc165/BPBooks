/*-------------------------------slider tab----------------------------*/

let slideIndex = 1;
function plusSlides(n) {
  if (n > 3) {
    n = 1;
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
  slideIndex=n
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slides[n].style.display = "flex"; 

}
/*----------------------------category*---------------/ */

function openCategory(evt, categoryname,slideIndx) {
 
  var  tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");

showSlides(slideIndx);

  for ( var i = 0; i < tabcontent.length; i++) {
    
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  var elemet = document.getElementById(categoryname)
 
  elemet.style.display = "block"; 
  evt.currentTarget.className += " active";
  
}
document.getElementById("defaultOpen").click();


 
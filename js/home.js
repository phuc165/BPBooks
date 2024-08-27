let slideIndex = 0;
let count = 0;
function plusSlides(n) {
  count = count + n;
  showSlides(slideIndex += n);
  if (count > 0 && count < 2){
    document.getElementById("slider_next").style.display = "block";
    document.getElementById("slider_prev").style.display = "block";
    
  }
  if (count <= 0) {document.getElementById("slider_prev").style.display = "none"; }
  if (count >= 2){document.getElementById("slider_next").style.display = "none";}
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
  count = 0;  
  document.getElementById("slider_prev").style.display = "none";
  document.getElementById("slider_next").style.display = "block";
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
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById("defaultOpen").click();
});
























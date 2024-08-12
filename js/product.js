function myFunction(imgs,num) {
    var imgID = "expandedImg" + num;
    var expandImg = document.getElementById(imgID);
    expandImg.src = imgs.src;
}
document.getElementById("defaultOpen").click();




// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("expandedImg1");
var modalImg = document.getElementById("gallery");

img.addEventListener('click' ,()=>{
  modal.style.display = "block";
  modalImg.src = this.src;
  document.getElementById("defaultOpen2").click();
})

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
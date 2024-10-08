function myFunction(imgs, num) {
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

img.addEventListener("click", () => {
  modal.style.display = "block";
  modalImg.src = this.src;
  document.getElementById("defaultOpen2").click();
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};



var productName = document.getElementById("productTitle");
var tempQty = 1;
var qtyText = document.getElementById("qty");

function PlusQty() {
  if (tempQty < productDetail.productQty) {
    tempQty++;
  }
  UpdateQtytext();
  InnerBuyButton();
}
function MinusQty() {
  tempQty--;
  if (tempQty <= 0) tempQty = 0;
  UpdateQtytext();
  InnerBuyButton();
}

function GetTempQty() {
  return tempQty;
}
function UpdateQtytext() {
  qtyText.innerText = tempQty;
}
function addCartFromDetail() {
  var object = {
    id: productDetail.productID,
    qty: tempQty,
    title: productDetail.title,
    img: productDetail.img1,
    newPrice: productDetail.newPrice,
    oldPrice: productDetail.oldPrice,
    productQty: productDetail.productQty
  };
  var stringf = JSON.stringify(object);

  var newstring = stringf.replace(/\[|\]/g, "");
  var newnewstring = newstring.replace(/\//g, "\\/");
  AddToCartSession(newnewstring);
}

function AddToCartSession(value) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "addCart.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log("Session variable set successfully!");
    }
  };
  xhr.send("productID=" + encodeURIComponent(value));
}

function InnerBuyButton() {
  document.getElementById("buyNow").innerHTML = `<a href="thanhtoan.php?productID=${productDetail.productID}&quantity=${tempQty}&Cart=0">Mua ngay</a>`;
}

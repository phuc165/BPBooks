var productName = document.getElementById("productTitle");
var rate = document.getElementById("rate");
var brand = document.getElementById("brand");
var size = document.getElementById("size");
var tempQtt = 1;
var qttText = document.getElementById("qtt");

{
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
}

function PlusQtt() {
  if (tempQtt < productDetail.instock) {
    tempQtt++;
  }
  UpdateQtttext();
  InnerBuyButton();
}
function MinusQtt() {
  tempQtt--;
  if (tempQtt <= 0) tempQtt = 0;
  UpdateQtttext();
  InnerBuyButton();
}

function GetTempQtt() {
  return tempQtt;
}
function UpdateQtttext() {
  qttText.innerText = tempQtt;
}
function addCartFromDetail() {
  var object = {
    id: productDetail.productID,
    qtt: tempQtt,
    name: productDetail.productname,
    img: productDetail.image,
    price:
      productDetail.price -
      (productDetail.price * productDetail.discount) / 100,
  };
  var stringf = JSON.stringify(object);

  var newstring = stringf.replace(/\[|\]/g, "");
  var newnewstring = newstring.replace(/\//g, "\\/");
  AddToCartSession(newnewstring);
}

function AddToCartSession(value) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "cartChange.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log("Session variable set successfully!");
    }
  };
  xhr.send("prodID=" + encodeURIComponent(value));
}

function InnerBuyButton() {
  document.getElementById(
    "buyNow"
  ).innerHTML = `<a href="./payment.php?productID=${productDetail.productID}&quantity=${tempQtt}&FromCart=0">Mua ngay</a>`;
}

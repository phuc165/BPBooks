var product_container = document.getElementsByClassName("product_container2");
function hideProduct() {
  for (let i = 10; i < product_container.length; i++) {
    product_container[i].style.display = "none";
  }
}
function ShowAll() {
  for (let i = 0; i < product_container.length; i++) {
    const computedStyle = window.getComputedStyle(product_container[i]);
    if (computedStyle.display === "none") {
      product_container[i].style.display = "block";
    }
  }
  document.getElementById("showmore").style.display = "none";
}

var productListHolder = document.getElementById("list");
var filter = {
  minPrice: 0,
  maxPrice: 9999999,
  age: ["6", "12", "16", "18"],
  nxb: ["Nhà Xuất Bản Kim Đồng", "Trẻ", "IPM"],
};
var priceChecker = document.getElementsByClassName("priceCheck");

function AddPriceFilter(element, min = 0, max = 9999999) {
  if (element.checked) {
    for (var i = 0; i < priceChecker.length; i++) {
      priceChecker[i].checked = false;
    }
    element.checked = true;
    filter.minPrice = min;
    filter.maxPrice = max;
  } else {
    filter.minPrice = 0;
    filter.maxPrice = 9999999;
  }
  FilterProduct();
}

function AddAgeFilter(element, age) {
  if (element.checked) {
    filter.age.push(age);
  } else {
    filter.age.splice(filter.age.indexOf(age), 1);
  }
  (filter);
  FilterProduct();
}

function AddNxbFilter(element, nxb) {
  if (element.checked) {
    filter.nxb.push(nxb);
  } else {
    filter.nxb.splice(filter.nxb.indexOf(nxb), 1);
  }
  FilterProduct();
}

function Uncheck(item) {
  item.checked = false;
}

function FilterProduct() {
  var filteredList = [];
  var prodstring = "";

  for (var i = 0; i < productList.length; i++) {
    if (
      productList[i].newPrice < filter.maxPrice &&
      productList[i].newPrice >= filter.minPrice &&
      filter.age.includes(productList[i].age) &&
      filter.nxb.includes(productList[i].nxb)
    ) {
      filteredList.push(productList[i]);
    }
  }

  for (var i = 0; i < filteredList.length; i++) {
    var object = {
      id: filteredList[i].productID,
      qty: 1,
      title: filteredList[i].title,
      img: filteredList[i].img1,
      productQty: filteredList[i].productQty,
      newPrice: filteredList[i].newPrice,
      oldPrice: filteredList[i].oldPrice,
    };
    var stringf = JSON.stringify(object);

    var newstring = stringf.replace(/\[|\]/g, "");
    var newnewstring = newstring.replace(/\//g, "\\/");
    var discount = Math.round(
      (1 - filteredList[i].newPrice / filteredList[i].oldPrice) * 100,
      1
    );
    prodstring += `
                    <div class='product_container2'>
                        <a href='product.php?productID=${filteredList[i].productID}' class='product_image'>
                            <img src='${filteredList[i].img1}' alt=''>
                        </a>
                        <div class='product_bottom'>
                            <div class='title'>
                                <a href='product.php?productID=${filteredList[i].productID}' >${filteredList[i].title}</a>
                            </div>                        
                            <div class='product_price'>
                                <p class='newprice'>${filteredList[i].newPrice} đ<span>- ${discount} %</span></p>
                                <p class='oldprice'>${filteredList[i].oldPrice} đ</p>
                            </div>
                            <div class='buyContainer'>
                                <form method='post' action='addCart.php'>
                                    <input type='hidden' name='productID' value='${newnewstring}'/>
                                    <button type='submit' class='addCart' >Thêm vào giỏ</button>
                                </form>
                                <div class='buyNow'>Mua ngay</div>
                            </div>  
                            <div class='rating_container'>
                                <div class='rating'>
                                    
                                </div>
                                <div class='soldqty'>
                                    
                                </div>
                            </div>
                        </div>                         
                    </div>
                `;
  }
  productListHolder.innerHTML = prodstring;
}

function ArrangeByName(ascen) {
  if (ascen == "az") {
    productList.sort((a, b) => a[1].localeCompare(b[1])); //tang
  } else if (ascen == "za") {
    productList.sort((a, b) => b[1].localeCompare(a[1])); //giam
  } else if (ascen == "19") {
    productList.sort((a, b) => a.newPrice - b.newPrice);
  } else if (ascen == "91") {
    productList.sort((a, b) => b.newPrice - a.newPrice);
  } else if (ascen == "time") {
  }
  FilterProduct();
}
var sortOption = document.getElementById("sort-options");
sortOption.addEventListener("onchange", () => {
  var selectValue = sortOption.options[sortOption.selectedIndex].value;
  ArrangeByName(selectValue);
  FilterProduct();
});

function consoloertest() {
  var selectValue = sortOption.options[sortOption.selectedIndex].value;
  ArrangeByName(selectValue);
  FilterProduct();
}

var productListHolder = document.getElementById("List-san-pham");
var filterCondition = {
  minPrice: 0,
  maxPrice: 9999999,
  size: ["S", "M", "L", "XL", "XXL"],
  type: ["Áo hoodie", "Áo khoác jean", "Áo sơ mi", "Quần bò", "Quần tây"],
};
var priceChecker = document.getElementsByClassName("price-check");
function AddCondition(element, min = 0, max = 9999999) {
  if (element.checked) {
    for (var i = 0; i < priceChecker.length; i++) {
      priceChecker[i].checked = false;
    }
    element.checked = true;
    filterCondition.minPrice = min;
    filterCondition.maxPrice = max;
  } else {
    filterCondition.minPrice = 0;
    filterCondition.maxPrice = 9999999;
  }

  FilterProduct();
}
function AddSizeCondition(ele, size) {
  if (ele.checked) {
    filterCondition.size.push(size);
  } else {
    filterCondition.size.splice(filterCondition.size.indexOf(size), 1);
  }
  console.log(filterCondition);
  FilterProduct();
}

function AddTypeCondition(ele, type) {
  if (ele.checked) {
    filterCondition.type.push(type);
  } else {
    filterCondition.type.splice(filterCondition.type.indexOf(type), 1);
  }
  console.log(filterCondition);
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
      productList[i].price < filterCondition.maxPrice &&
      productList[i].price >= filterCondition.minPrice &&
      filterCondition.size.includes(productList[i].size) &&
      filterCondition.type.includes(productList[i].category)
    ) {
      filteredList.push(productList[i]);
    }
  }

  for (var i = 0; i < filteredList.length; i++) {
    var object = {
      id: filteredList[i].productID,
      qtt: 1,
      name: filteredList[i].productname,
      img: filteredList[i].image,
      warehouse: filteredList[i].instock,
      price: filteredList[i].price,
    };
    var stringf = JSON.stringify(object);

    var newstring = stringf.replace(/\[|\]/g, "");
    var newnewstring = newstring.replace(/\//g, "\\/");
    if (filteredList[i].discount > 0) {
        var afterDiscount =
        filteredList[i].price -
        (filteredList[i].price * filteredList[i].discount) / 100;
        prodstring += `
                        <div class='product-single col-20'>
                            <a class='product-link'
                                href='productDetail.php?productID=${filteredList[i].productID}'>D
                                <div class='product-img'>
                                    <img src='${filteredList[i].image}' alt>
                                </div>
                                <div class='product-name'>
                                    <p>${filteredList[i].productname} </p>
                                </div>
                            </a>
                            <div class='product-price'>
                                <p><del>${filteredList[i].price}</del>${afterDiscount} <sup>đ</sup></p>
                                <div class='price-discount'><p>${filteredList[i].discount}%</p></div>
                            </div>
                            <div class='buy-product'>
                                <button class='buy'>
                                    <a class='buy-btn-link'
                                        href='productDetail.php?productID=${filteredList[i].productID}'>
                                        Mua</a>
                                </button>
                                <form class='addCart' method='post' action='cartChange.php'>
                                    <input type='hidden' name='prodID' value='${newnewstring}' />
                                    <button type='submit' class='addcart'> Thêm vào giỏ </button>
                                </form>
                            </div>
                        </div>
                    `;
    } else {
      prodstring += `
                        <div class='product-single col-20'>
                            <a class='product-link'
                                href='productDetail.php?productID=${filteredList[i].productID}'>
                                <div class='product-img'>
                                    <img src='${filteredList[i].image}' alt>
                                </div>
                                <div class='product-name'>
                                    <p>${filteredList[i].productname} </p>
                                </div>
                            </a>
                            <div class='product-price'>
                                <p>${filteredList[i].price} <sup>đ</sup></p>
                            </div>
                            <div class='buy-product'>
                                <button class='buy'><a class='buy-btn-link'
                                        href='productDetail.php?productID=${filteredList[i].productID}'>
                                        Mua</a></button>
                                <form class='addCart' method='post' action='cartChange.php'>
                                    <input type='hidden' name='prodID' value='${newnewstring}' />
                                    <button type='submit' class='addcart'> Thêm vào giỏ </button>
                                </form>
                            </div>
                        </div>
                    `;
    }
  }
  productListHolder.innerHTML = prodstring;
}

function ArrangeByName(ascen) {
  if (ascen == "az") {
    console.log(productList[0]);
    productList.sort((a, b) => a[1].localeCompare(b[1])); //tang
  } else if (ascen == "za") {
    productList.sort((a, b) => b[1].localeCompare(a[1])); //giam
  } else if (ascen == "19") {
    productList.sort((a, b) => a.price - b.price);
  } else if (ascen == "91") {
    productList.sort((a, b) => b.price - a.price);
  } else if (ascen == "time") {
    console.log("do nothing");
  }
  FilterProduct();
}
var sortOption = document.getElementById("sort-options");
sortOption.addEventListener("onchange", () => {
  var selectValue = sortOption.options[sortOption.selectedIndex].value;
  console.log(selectValue);
  ArrangeByName(selectValue);
  FilterProduct();
});

function consoloertest() {
  var selectValue = sortOption.options[sortOption.selectedIndex].value;
  console.log(selectValue);
  ArrangeByName(selectValue);
  FilterProduct();
}

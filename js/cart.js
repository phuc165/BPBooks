var cartPageHolder = document.getElementById("cartList");
var total = document.getElementById("sum");
var totalInCart = document.getElementById("totalItem");
var cartArray = [];

function PlusQty(id) {
  if (cartListJson[id].qty < cartListJson[id].productQty) {
    cartListJson[id].qty += 1;
  }
  UpdateTotal(id);
  UpdateQuantityText(id);
  UpdateTotalCost();
  UpdateCart();
}

function MinusQty(id) {
  cartListJson[id].qty -= 1;
  if (cartListJson[id].qty <= 0) {
    cartListJson[id].qty = 0;
    RemoveFromCart(id);
  }
  UpdateTotal(id);
  UpdateQuantityText(id);
  UpdateTotalCost();
  UpdateCart();
}

function UpdateQuantityText(index) {
  var qtytext = document.getElementsByClassName("qty");
  qtytext[index].innerText = cartListJson[index].qty;
}

function UpdateTotal(index) {
  var totaltext = document.getElementsByClassName("totalPerProduct");
  totaltext[index].innerText =
    cartListJson[index].qty * cartListJson[index].newPrice;
}

function UpdateTotalCost() {
  var totalAmount = 0;
  if (cartListJson != null) {
    for (var i = 0; i < cartListJson.length; i++) {
      totalAmount += cartListJson[i].qty * cartListJson[i].newPrice;
    }
  }
  total.innerText = totalAmount + "đ";
}

function RemoveFromCart(index) {
  cartListJson.splice(index, 1);
  UpdateCart();
  console.log(cartListJson);
}

function UpdateCart() {
  var cartstring = "";
  if (cartListJson == null) {
    totalInCart.innerHTML = `Hổng có gì hết trơn`;
    cartstring = `
                <div class='cart-empty'>
                    <img src='./images/empty-cart.png' >
                </div>
                `;
  } else {
    for (var i = 0; i < cartListJson.length; i++) {
      totalInCart.innerHTML = `Bạn đang có ${cartListJson.length} sản phẩm trong giỏ hàng`;
      cartstring += `
        <div class='product'>
            <div class='imgHolder'><img src='${cartListJson[i].img}' alt></div>
            <div id='title'>${cartListJson[i].title}</div>
            <div class='qtyControl'>
                <button onclick='MinusQty(${i})'>-</button>
                <div class='qty'>${cartListJson[i].qty}</div>
                <button onclick='PlusQty(${i})'>+</button>
            </div>
            <div class='price'>
                <div id='newprice'>${cartListJson[i].newPrice}</div>
                <div id='oldprice'>${cartListJson[i].oldPrice}</div>
            </div>
            <div class='totalPerProduct'>${cartListJson[i].newPrice * cartListJson[i].qty}</div>
            <button class='delete' onclick='RemoveFromCart(${i})'></button>
        </div>
        `;
    }

    clearCart();
    for (var i = 0; i < cartListJson.length; i++) {
      var stringf = JSON.stringify(cartListJson[i]);

      var newstring = stringf.replace(/\[|\]/g, "");
      var newnewstring = newstring.replace(/\//g, "\\/");
      UpdateTotalCost();
      setSessionVariable(newnewstring);
    }
  }
  cartPageHolder.innerHTML = cartstring;
}
function setSessionVariable(value) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "cartUpdate.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Session variable set successfully!");
      }
    };
    xhr.send("value=" + encodeURIComponent(value));
  }
function clearCart() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "cartClear.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log("Session variable set successfully!");
      }
    };
    xhr.send("clear=" + encodeURIComponent(1));
  }
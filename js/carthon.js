/* navbar cart */
let cartData = [
    {
        id:1,
        name:"ao thun phan dong",
        imgsrc:"./Image/product/product2.png",
        quantity:1,
        unitprice:100000
},

]
let productData = [
    {
        id:1,
        name:"ao thun phan dong",
        imgsrc:"./Image/product/product2.png",
        quantity:1,
        unitprice:100000
},
{
    id:2,
    name:"ao thun khong  phan dong",
    imgsrc:"./Image/product/product1.png",
    quantity:1,
    unitprice:200000
},
]
var cart = document.getElementById("cart-holder")
var cartPageHolder = document.getElementById("cart-page-list")
var total=document.getElementById("Total-cart-page")
var cartText = document.getElementsByClassName("cart-qtt-text")

function PlusQtt(id){
    cartData[id].quantity +=1;
    UpdateTotal(id);
    UpdateQuantityText(id)
    UpdateTotalCost()
}
function MinusQtt(id){
    cartData[id].quantity -=1;
    if(cartData[id].quantity<=0){
        cartData.splice(id)
        UpdateCart();
    }
    UpdateTotal(id)
    UpdateQuantityText(id)
    UpdateTotalCost()

}

function UpdateQuantityText(index){
    var qtttext = document.getElementsByClassName("quantiy-text")
    qtttext[index].innerText =cartData[index].quantity ;
}
function AddToCart(id){
    let item =productData.find(product=>product.id==id)
    cartData.push(item);
    var productFormat =""
    for(var i=0;i<cartData.length;i++){
    var total = cartData[i].unitprice *cartData[i].quantity;

        productFormat+=`<div class="cart-item-single">
    <div class="item-img">
        <img src="${cartData[i].imgsrc}" alt=""/>
    </div>

    <div class="item-info">
        <div class="item-name">${cartData[i].name} </div>
        <div class="item-price">${cartData[i].unitprice}</div>
    </div>
    <div class="item-sum">
        <div class="item-total-price">${total}</div>
        <div class="item-total-quantity">
            <button onClick="MinusQtt(${i})">-</button>
            
            <p class="quantiy-text">${cartData[i].quantity}</p>
            <button onClick="PlusQtt(${i})">+</button>
        </div>
    </div>
</div>`
    cartPageHolder.innerHTML=productFormat;
    }
    UpdateTotalCost()
   
}

function UpdateCart(){
    var productFormat =""
    for(var i=0;i<cartData.length;i++){
    var total = cartData[i].unitprice *cartData[i].quantity;

        productFormat+=`<div class="cart-item-single">
    <div class="item-img">
        <img src="${cartData[i].imgsrc}" alt=""/>
    </div>

    <div class="item-info">
        <div class="item-name">${cartData[i].name} </div>
        <div class="item-price">${cartData[i].unitprice}</div>
    </div>
    <div class="item-sum">
        <div class="item-total-price">${total}</div>
        <div class="item-total-quantity">
            <button onClick="MinusQtt(${i})">-</button>
            
            <p class="quantiy-text">${cartData[i].quantity}</p>
            <button onClick="PlusQtt(${i})">+</button>
        </div>
    </div>
</div>`
    cartPageHolder.innerHTML=productFormat;
    }
}

function UpdateTotal(index){
    var totaltext = document.getElementsByClassName("item-total-price")
    totaltext[index].innerText =cartData[index].quantity * cartData[index].unitprice ;
    
   
}
function UpdateTotalCost(){
    var totalAmount=0
    for(var i=0;i<cartData.length;i++){
        totalAmount += (cartData[i].quantity * cartData[i].unitprice)
    } 
    total.innerText = totalAmount + "đ"
    
}
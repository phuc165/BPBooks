
var cart = document.getElementById("cart-holder")
var cartPageHolder = document.getElementById("cart-page-list")
var total=document.getElementById("Total-cart-page")
var cartText = document.getElementsByClassName("cart-qtt-text")
var totalInCart= document.getElementById("totalInCart")

var cartArray=[]
function PlusQtt(id){
    
    if(cartListjs[id].qtt < cartListjs[id].quantity){
        cartListjs[id].qtt +=1;
    }
    UpdateTotal(id);
    UpdateQuantityText(id)
    UpdateTotalCost()
    UpdateCart()

}
function MinusQtt(id){
    cartListjs[id].qtt -=1;
    if(cartListjs[id].qtt<=0){
        cartListjs[id].qtt=0
        RemoveFromCart(id);
    }
    UpdateTotal(id)
    UpdateQuantityText(id)
    UpdateTotalCost()
    UpdateCart()

}

function UpdateQuantityText(index){
    var qtttext = document.getElementsByClassName("quantiy-text")
    qtttext[index].innerText =cartListjs[index].qtt ;
}




function UpdateTotal(index){
    var totaltext = document.getElementsByClassName("item-total-price")
    totaltext[index].innerText =cartListjs[index].qtt * cartListjs[index].price ;
    
   
}
function UpdateTotalCost(){
    var totalAmount=0
    if(cartListjs!=null){
    for(var i=0;i<cartListjs.length;i++){
        totalAmount += (cartListjs[i].qtt * cartListjs[i].price)
    } }
    total.innerText = totalAmount + "đ"
    
}
function RemoveFromCart(index){
   

    cartListjs.splice(index,1)
    UpdateCart()
    console.log(cartListjs)
  
}
function UpdateCart(){
    
    var cartstring="";
    
    if(cartListjs==null){
        totalInCart.innerHTML=`Bạn đang có 0 sản phẩm trong giỏ hàng`
        cartstring=`<div class='cart-empty'>
                    <img src='./Image/emptyCart.jpg' alt=''>
                </div>`
    }else{
    for(var i=0;i<cartListjs.length;i++){
       
        totalInCart.innerHTML=`Bạn đang có ${cartListjs.length} sản phẩm trong giỏ hàng`
        
        cartstring +=`
        <div class='cart-item-single'>
            <div class='item-select'>
                <input type='checkbox' name='select-buy' id=''>
            </div>
                    
            <div class='item-img'>
                <img src='${cartListjs[i].img}' alt=''>
            </div>

                    <div class='item-info'>
                        <div class='item-name'>${cartListjs[i].name} </div>
                        <div class='item-price'>${cartListjs[i].price} đ</div>
                    </div>
                    <div class='item-sum'>
                        <div class='item-total-price'>${cartListjs[i].price * cartListjs[i].qtt} đ</div>
                        <div class='item-total-quantity'>
                            <button onclick='MinusQtt(${i})' >-</button>
                            
                            <div class='quantiy-text'>${cartListjs[i].qtt}</div>
                            <button onclick='PlusQtt(${i})'>+</button>
                        </div>
                    </div>
                    <div onclick='RemoveFromCart(${i})' class='remove-btn'>
                        <i class='fa fa-trash'></i>
                    </div>
        </div>
        `
    }
}
for(var i=0;i<cartListjs.length;i++){
    
        var stringf=JSON.stringify(cartListjs);
    
        var newstring = stringf.replace(/\[|\]/g, "")
        var newnewstring = newstring.replace(/\//g, '\\/')
        var arraystring=[]
        arraystring.push(newnewstring)
        console.log(newnewstring)
    UpdateTotalCost()
    setSessionVariable(arraystring)
}
    cartPageHolder.innerHTML=cartstring
}

 function setSessionVariable(value) {
    
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'cartUpdate.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Session variable set successfully!');
        }
    };
    xhr.send('value=' + encodeURIComponent(value));
} 



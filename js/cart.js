function product(title, qty, newprice, oldprice){
    this.title = title;
    this.qty = qty;
    this.newprice = newprice;
    this.oldprice = oldprice;
}

const arya = new product("Arya ban ben ban toi bang AK", 5, 200000, 500000);

document.getElementById("title").innerHTML = arya.title;
document.getElementById("qty").innerHTML = arya.qty;
document.getElementById("newprice").innerHTML = arya.newprice + " đ";
document.getElementById("oldprice").innerHTML = arya.oldprice + " đ";

document.getElementById("sum").innerHTML = arya.newprice * arya.qty;

function subQty(){
    if (arya.qty > 1){
        arya.qty = arya.qty - 1;
        document.getElementById("qty").innerHTML = arya.qty;
        document.getElementById("sum").innerHTML = arya.newprice * arya.qty;
    }
}
function addQty(){
    arya.qty = arya.qty + 1;
    document.getElementById("qty").innerHTML = arya.qty;
    document.getElementById("sum").innerHTML = arya.newprice * arya.qty;
}


function deleteProduct() {  
    
}
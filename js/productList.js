var product_container = document.getElementsByClassName("product_container2");
function hideProduct() {
    for (let i = 10; i < product_container.length; i++){
        product_container[i].style.display = "none";
    }
}
function ShowAll() {
for (let i = 0; i < product_container.length; i++) {
    const computedStyle = window.getComputedStyle(product_container[i]);
    if (computedStyle.display === 'none') {
        product_container[i].style.display = 'block';
    }
}
document.getElementById("showmore").style.display = "none";
}
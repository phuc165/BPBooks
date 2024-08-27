const addToCartButtons = document.querySelectorAll('.addCart');

addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productId = button.closest('.product_container').dataset.productId;   

        addToCart(productId);
    });
});

function addToCart(productId) {
    // Send a request to the server using AJAX
    fetch('addCart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'productId=' + productId
    })
    .then(response => response.json())
    .then(data => {
        // Update the cart UI or display a success message
        console.log(data.message);
    })
    .catch(error => {
        console.error('Error adding to cart:', error);
    });
}
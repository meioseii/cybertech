const logout = document.getElementById('logout');
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartItems = document.querySelector('#cart-items');
let cartItemsCount = 0;

logout.addEventListener('click', () => {
    confirm('Are you sure you want to logout?') ? window.location.href= '../index.html' : null;
})

window.addEventListener('load', () => {
    cartItemsCount = parseInt(localStorage.getItem("cartItemsCount")) || 0;
    cartItems.innerHTML = 'Cart Items: ' + cartItemsCount;
})

let cartItemsArray = JSON.parse(localStorage.getItem('cartItemsArray')) || [];

function addToCart() {
    cartItemsCount++
    cartItems.innerHTML = 'Cart Items: ' + cartItemsCount;
    alert("Added to Cart!")
    localStorage.setItem("cartItemsCount", cartItemsCount);

    let product = this.parentNode;
    let productName = product.querySelector('.product-name').innerHTML;
    let productPrice = product.querySelector('.price').innerHTML;
    let productImage = product.querySelector('img').src;

    let productDetails = {
        name: productName,
        price: productPrice,
        image: productImage
    }

    cartItemsArray.push(productDetails);

    localStorage.setItem("cartItemsArray", JSON.stringify(cartItemsArray));
}

addToCartButtons.forEach(button => {
    button.addEventListener('click', addToCart);
})

function deleteFromCart(index) {
    cartItemsArray.splice(index, 1);

    localStorage.setItem("cartItemsArray", JSON.stringify(cartItemsArray));
    
    let itemDiv = checkoutContainer.children[index];
    checkoutContainer.removeChild(itemDiv);

    cartItemsCount--;
    
    localStorage.setItem("cartItemsCount", cartItemsCount);
    cartItemsCount.innerHTML = 'Cart Items: ' + cartItemsCount;

    window.location.reload();
}

function checkOut() {

    let confirmCheckOut = confirm('Are you sure you want to checkout?');

    if (confirmCheckOut) {
        cartItemsArray = [];
        localStorage.removeItem('cartItemsArray');
    
        cartItemsCount = 0;
        localStorage.removeItem('cartItemsCount');
    
        alert('You ordered successfuly!')
        window.location.reload();
    }
}

const checkoutContainer = document.querySelector('.checkout-container');
const checkoutButtonContainer = document.querySelector('.checkout-button-container');
let totalCheckoutBalance = 0;

cartItemsArray.forEach(function(item, index) {
    let checkoutProductContainer = document.createElement('div');
    checkoutProductContainer.classList.add('checkout-product');

    let itemImage = document.createElement('img');
    itemImage.src = item.image;

    let productInfo = document.createElement('div');
    productInfo.classList.add('product-info');

    let itemName = document.createElement('span');
    itemName.classList.add('product-name');
    itemName.innerHTML = item.name;

    let itemPriceDiv = document.createElement('div');
    itemPriceDiv.innerHTML = '₱';

    let itemPrice = document.createElement('span');
    itemPrice.classList.add('price');
    itemPrice.innerHTML = item.price;

    totalCheckoutBalance += parseInt(item.price);

    let deleteProductButton = document.createElement('button');
    deleteProductButton.classList.add('delete-from-cart');
    deleteProductButton.innerHTML = "Delete"

    deleteProductButton.addEventListener('click', function() {
        deleteFromCart(index);
    })

    itemPriceDiv.appendChild(itemPrice);

    checkoutProductContainer.appendChild(itemImage);

    productInfo.appendChild(itemName);
    productInfo.appendChild(itemPriceDiv);
    productInfo.appendChild(deleteProductButton);

    checkoutProductContainer.appendChild(productInfo);

    horizontalBreakLine = document.createElement('hr');

    checkoutContainer?.appendChild(checkoutProductContainer);
    checkoutContainer?.appendChild(horizontalBreakLine);
});

if (cartItemsArray.length === 0) {
    let emptyCartHeader = document.createElement('h1');
    emptyCartHeader.innerHTML = 'YOUR CART IS EMPTY.';
    checkoutContainer?.appendChild(emptyCartHeader);
} else {
    let checkoutButton = document.createElement('button');
    checkoutButton.setAttribute('onclick', 'checkOut()');

    let totalCheckoutBalanceDiv = document.createElement('div');
    totalCheckoutBalanceDiv.innerHTML = '₱'

    let totalCheckoutBalanceSpan = document.createElement('span');
    totalCheckoutBalanceSpan.innerHTML = totalCheckoutBalance;


    checkoutButton.innerHTML = 'Check Out';
    checkoutButton.classList.add('checkout-button');
    totalCheckoutBalanceDiv.appendChild(totalCheckoutBalanceSpan);
    checkoutButtonContainer?.appendChild(totalCheckoutBalanceDiv);
    checkoutButtonContainer?.appendChild(checkoutButton);
}

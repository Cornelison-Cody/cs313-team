var addToCart = function (price, item) {
    var cartPrice = document.getElementById("cartTotal");
    var formPrice = document.getElementById("formTotal");
    var cartQuantity = document.getElementById("cartItems");
    var items = document.getElementById("itemNumbers");
    var itemsTotal = document.getElementById("itemTotal");

    items.value += item;
    cartPrice.innerHTML = (price + Number(cartPrice.innerHTML)).toFixed(2);
    formPrice.innerHTML = ((Number(cartPrice.innerHTML)*1.08) + 10).toFixed(2);
    itemsTotal.value = cartPrice.innerHTML;
    cartQuantity.innerHTML++;
};

var validatePhone = function (element) {
    if (element.value.match(/(^\d{3}[-]\d{3}[-]\d{4}\b$)|(^\d{10}\b$)/g)) {
    }
    else {
        element.nextElementSibling.style.display = "inline";
    }
};

var validateZip = function (element) {
    if (element.value.match(/^\d{5}\b$/g)) {

    }
    else {
        element.nextElementSibling.style.display = "inline";
    }
};

var validateDate = function (element) {
    if (element.value.match(/^((([1-9]|[0][1-9])|[1][0-2])\/([2][0][2-9][0-9]|[2][0][1][9])\b$)|^(([1][1-2])\/([2][0][1][8])\b$)/g)) {

    }
    else {
        element.nextElementSibling.style.display = "inline";
    }
};

var hideError = function (element) {
    element.nextElementSibling.style.display = "none";
};

var formSubmit = function () {
    msg = "Thank you for your purchase! Your order will ship soon.";
};

var formReset = function () {
    var cartPrice = document.getElementById("cartTotal");
    var formPrice = document.getElementById("formTotal");
    var cartQuantity = document.getElementById("cartItems");

    cartPrice.innerHTML = "0";
    formPrice.innerHTML = "0";
    cartQuantity.innerHTML = "0";
};
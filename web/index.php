<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Used Games</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
    <div id="header-logo">
        <a href="#">
            <img src="media/chadsCafe2.png" alt="Logo" width="60" height="60">
        </a>
    </div>

    <div id="header-title">
        <h1>Game Sale!!</h1>
    </div>

    <div class="link-rightSide">
        <div class="cartInfo">
            <p>Games: <span id="cartItems">0</span></p>
            <p>Total: $<span id="cartTotal">0</span></p>
        </div>

    </div>
</header>

<div class="flex-container">
    <div class="post-container">
        <img src="media/Brass.JPG">
        <h3>Brass</h3>
        <p>PLAYERS: 2-4 <br>
            TIME: 60-120 minutes <br>
            WEIGHT:  Medium <br> </p>
        <h3 class="price">Like New: $25.00</h3>
        <button onclick="addToCart(25, 0)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Caverna.JPG">
        <h3>Caverna</h3>
        <p>PLAYERS: 1-7 <br>
            TIME: 30-210 minutes <br>
            WEIGHT:  Medium-Heavy <br> </p>
        <h3 class="price">Like New: $50.00</h3>
        <button onclick="addToCart(50, 1)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Istanbul.JPG">
        <h3>Istanbul</h3>
        <p>PLAYERS: 2-5 <br>
            TIME: 40-60 minutes <br>
            WEIGHT:  Medium <br> </p>
        <h3 class="price">Like New: $25.00</h3>
        <button onclick="addToCart(25, 2)" class="purchaseButton">Add to cart</button>
    </div>
    <div class="post-container">
        <img src="media/Pandemic.JPG">
        <h3>Pandemic</h3>
        <p>PLAYERS: 2-4 <br>
            TIME: 45 minutes <br>
            WEIGHT:  Light-Medium <br> </p>
        <h3 class="price">Like New: $25.00</h3>
        <button onclick="addToCart(25, 3)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Race For The Galaxy.JPG">
        <h3>Race For The Galaxy</h3>
        <p>PLAYERS: 2-4 <br>
            TIME: 30-60 minutes <br>
            WEIGHT:  Light-Medium <br> </p>
        <h3 class="price">Like New: $15.00</h3>
        <button onclick="addToCart(15, 4)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Splendor.JPG">
        <h3>Splendor</h3>
        <p>PLAYERS: 2-4 <br>
            TIME: 30 minutes <br>
            WEIGHT:  Light <br> </p>
        <h3 class="price">Like New: $20.00</h3>
        <button onclick="addToCart(20, 5)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Terraforming Mars.JPG">
        <h3>Terraforming Mars</h3>
        <p>PLAYERS: 1-5 <br>
            TIME: 120 minutes <br>
            WEIGHT:  Medium-Heavy <br> </p>
        <h3 class="price">Like New: $40.00</h3>
        <button onclick="addToCart(40, 6)" class="purchaseButton">Add to
            cart</button>
    </div>
    <div class="post-container">
        <img src="media/Terra Mystica.JPG">
        <h3>Terra Mystica</h3>
        <p>PLAYERS: 2-5 <br>
            TIME: 60-150 minutes <br>
            WEIGHT:  Medium-Heavy <br> </p>
        <h3 class="price">Like New: $50.00</h3>
        <button onclick="addToCart(50, 7)" class="purchaseButton">Add to
            cart</button>
    </div>
    <!--No content, just used to make the form of items align-->
    <div class="evenFlex"></div>
</div>

<form action="purchaseReview.php" onreset="formReset()" method="post" >
    <div class="flexRow">
        <input type="text" name="firstName" placeholder="First Name">
        <input type="text" name="lastName" placeholder="Last Name">
        <input onfocus="hideError(this)" onblur="validatePhone(this)"
               type="text" name="phone" placeholder="Phone">
        <p style="color: red; display: none">Enter a 10 Digit Number</p>
    </div>
    <div class="flexRow">
        <input type="text" name="streetAddress" placeholder="Street Address">
        <input type="text" name="cityState" placeholder="City, State">
        <input onfocus="hideError(this)" onblur="validateZip(this)"
               type="text" name="zip" placeholder="Zip Code">
        <p style="color: red; display: none">Enter a 5 Digit ZipCode</p>
    </div>
    <div class="flexRow">
        <input type="text" name="cardType" placeholder="Card Type">
        <input type="text" name="cardNum" placeholder="Card Number">
        <input onfocus="hideError(this)" onblur="validateDate(this)"
               type="text" name="cardExp" placeholder="Exp: mm/yyyy">
        <p style="color: red; display: none">Choose a valid future date</p>
    </div>
    <div class="flexRow">
        <input type="text" name="itemNums" style="display: none;" id="itemNumbers">
        <input type="text" name="itemTotal" style="display: none;" id="itemTotal">
        <p>Shipping Total: $
            <span id="formTotal">0</span></p>
        <input class="purchaseButton" style="width: 202px; margin-top: 15px"
               type="submit" value="Submit" onsubmit="formSubmit()">
        <input class="purchaseButton" style="width: 202px; margin-top: 15px"
               type="reset" value="Reset">
    </div>
</form>

<footer>
    <div id="footer-socialMedia">
        <img src="media/socialMedia.png" alt="Social Media">
    </div>

    <div class="link-rightSide" >
        <p>Copyright Chad's Cafe</p>
    </div>
</footer>

</body>
</html>
<script src="script.js"></script>
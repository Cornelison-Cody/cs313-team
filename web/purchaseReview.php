<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Order Review</title>
    <link rel="stylesheet" href="style.css">

    <script>
        var showItems = function (itemString) {
            var items = document.getElementById("items");
            for (var i = 0; i < itemString.length; i++) {
                items.children[itemString.charAt(i)].style.display = "flex";
            }
        };
    </script>

    <style>
        img {
            width: 80px;
            height: 80px;
        }
        .post-container {
            display: none;
            align-items: center;
            justify-content: space-evenly;
            width: 210px;
            max-height: 100px;
            flex-direction: row;
        }
        form {
            margin: 10px;
        }
        @media only screen and (min-width: 1570px) {
            .post-container {
                margin-left: 1%;
                margin-right: 1%;
            }
        }

    </style>

</head>
<body onload="showItems('<?php echo $_POST['itemNums']; ?>')">
<header>
    <div id="header-logo">
        <a href="index.html">
            <img src="media/chadsCafe2.png" alt="Logo" width="60" height="60">
        </a>
    </div>

    <div id="header-title">
        <h1>Review and Place Order</h1>
    </div>
</header>

<div id="orderReview">
    <div id="items">
        <div class="post-container">
            <div>
                <img src="media/Brass.JPG">
            </div>
            <div>
                <h3>Brass</h3>
                <h3 class="price">$25.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Caverna.JPG">
            </div>
            <div>
                <h3>Caverna</h3>
                <h3 class="price">$50.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Istanbul.JPG">
            </div>
            <div>
                <h3>Istanbul</h3>
                <h3 class="price">$25.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Pandemic.JPG">
            </div>
            <div>
                <h3>Pandemic</h3>
                <h3 class="price">$25.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Race For The Galaxy.JPG">
            </div>
            <div>
                <h3>Race For <br> The Galaxy</h3>
                <h3 class="price">$15.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Splendor.JPG">
            </div>
            <div>
                <h3>Splendor</h3>
                <h3 class="price">$20.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Terraforming Mars.JPG">
            </div>
            <div>
                <h3>Terraforming <br> Mars</h3>
                <h3 class="price">$40.00</h3>
            </div>
        </div>
        <div class="post-container">
            <div>
                <img src="media/Terra Mystica.JPG">
            </div>
            <div>
                <h3>Terra Mystica</h3>
                <h3 class="price">$50.00</h3>
            </div>
        </div>
    </div>
    <div id="orderInfo">
           <form action="confirmation.php" method="post">
               <input type="text" name="firstName" value="<?php echo $_POST['firstName']; ?>">
               <input type="text" name="lastName" value="<?php echo $_POST['lastName']; ?>"> <br>
               <input type="text" name="streetAddress" value="<?php echo $_POST['streetAddress']; ?>">
               <input type="text" name="cityState" value="<?php echo $_POST['cityState']; ?>"> <br>
               <input type="text" name="zip" value="<?php echo $_POST['zip']; ?>">
               <input type="text" name="phone" value="<?php echo $_POST['phone']; ?>"> <br>
               <input type="text" name="cardType" value="<?php echo $_POST['cardType']; ?>">
               <input type="text" name="cardExp" value="<?php echo date('F Y',strtotime('01-'.str_replace('/', '-',$_POST['cardExp']))); ?>"> <br>
               <input type="text" name="itemTotal" value="$<?php echo $_POST['itemTotal']; ?>"> <br>
               <input class="purchaseButton" style="width: 202px; margin-top: 15px" type="submit" name="cancel" value="Cancel">
               <input class="purchaseButton" style="width: 202px; margin-top: 15px" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>
<script src="script.js"></script>
<?php include 'header.php'; ?>

<?php
    $itemString = $_POST['itemNums'];
    echo strlen($itemString);
    $itemCardArray = array();
    for ($i = 0; $i < strlen($itemString); $i++) {
        array_push($itemCardArray, "itemCards/itemCard".substr($itemString, $i, 1).".php");
    }
    foreach ($itemCardArray as $itemCard) {
        echo $itemCard;
    }
    $_SESSION['cartItems'] = $itemCardArray;
?>

    <style>
        img {
            width: 80px;
            height: 80px;
        }
        .post-container {
            display: flex;
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

<div id="orderReview">
    <div id="items">
        <?php
            foreach($itemCardArray as $itemCard) {
                include $itemCard;
            }
        ?>
    </div>
    <div id="orderInfo">
        <form action="confirmation.php" method="post">
            Total: <?php echo $_POST['itemTotal']; ?><input type="hidden" name="itemTotal" value="$<?php echo $_POST['itemTotal']; ?>"><br>
            <input class="purchaseButton" style="width: 202px; margin-top: 15px" type="submit" name="cancel" value="Cancel">
            <input class="purchaseButton" style="width: 202px; margin-top: 15px" type="submit" name="submit" value="Submit">
        </form>
        <form action="purchaseReview.php" method="post">
            <input type="hidden" name="itemNums" id="itemNumbers" value="<?php echo $_POST['itemNums']; ?>">
            <input class="purchaseButton" style="width: 202px; margin: 15px" type="submit" name="submit" value="Update Cart">
        </form>
    </div>
</div>

</body>
</html>
<script src="script.js"></script>
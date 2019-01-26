<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .post-container {
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
            height: auto;
            max-width: none;
            width: 35%;
        }
        .post-container > p {
            text-align: center;
            width: auto;
            font-size: small;
        }
    </style>

    <script>
        var showMsg = function () {
            <?php
                if (isset($_POST['submit'])) {
                    $divNum = 1;
                }
                else if (isset($_POST['cancel'])) {
                    $divNum = 2;
                }
            ?>
            document.children[0].children[1].children[<?php echo $divNum; ?>].style.display = "inherit";
        };
    </script>

</head>
<body onload="showMsg()">
<header>
    <div id="header-title">
        <h1>Confirmation</h1>
    </div>
</header>

<div class="post-container" style="display: none">
    <h1>Thank you for your *purchase!</h1> <br> <br>

    <p>*Chad's Cafe is supported by gamers like you. Thanks again!<p>
</div>

<div class="post-container" style="display: none">
    <h1>Order Canceled</h1> <br> <br>
    
    <p>We would appreciate your feedback. Please send us an email to support@chadscafe.com.</p>
</div>

</body>
</html>
<script src="script.js"></script>
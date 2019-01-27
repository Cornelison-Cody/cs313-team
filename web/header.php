<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Chad's Cafe</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php session_start(); ?>

<header>
    <div id="header-logo">
        <a href="#">
            <img src="media/chadsCafe2.png" alt="Logo" width="60" height="60">
        </a>
    </div>

    <div id="header-title">
        <h1>Chad's Cafe</h1>
    </div>

    <div class="link-rightSide">
        <div class="cartInfo">
            <p>Games: <span id="cartItems"><?php echo $_SESSION['cartTotal']; ?></span></p>
            <p>Total: $<span id="cartTotal"><?php echo $_SESSION['itemTotal']; ?></span></p>
        </div>

    </div>
</header>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="style.js"></script>
</head>
<body>
<div class="btn1">
	<button  id="men" onclick="window.location='nike.php'">MEN</button>
	<button  id="women" onclick="window.location='w.php'">WOMEN</button>
	<button  id="kids" onclick="window.location='rod.php'">KIDS</button>
	<button  id="handl" onclick="window.location='only.php'">HOME & LIVING</button>
	<button  id="discover" onclick="window.location='nike.php'">DISCOVER</button>
	<button style="float: right;" onmousemove="openprofile()">PROFILE</button>
    <div class="profile" id="pro"  onmouseleave="closeprofile()">
        <p>Hello &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
        <?php
            echo $_SESSION['username'];
        ?>
        <p style="border-bottom: 1pt solid black;padding-bottom: 7px;"></p>
        <a href="orders.php">Orders</a><br><br>
        <a href="wishlist">Wishlist</a><br><br>
        <a href="contact_us.php">Contact Us</a><br><br>
        <a href="logout.php">Logout</a>
    </div>
    <button style="float: right;" onclick="window.location.href='cart.php'">CART</button>
    <button style="float: right;" onclick="window.location.href='order.php'">ORDER</button>
</div>
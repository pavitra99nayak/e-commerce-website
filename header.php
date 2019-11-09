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
	<button id="men" onclick="window.location='men.php'">MEN</button>
	<button id="women"  onclick="window.location='women.php'">WOMEN</button>
	<button id="kids"  onclick="window.location='men.php'">KIDS</button>
	<button id="handl"  onclick="window.location='women.php'">HOME & LIVING</button>
	<button id="discover"  onclick="window.location='#'">DISCOVER</button>
	<button style="float: right;" onclick="openprofile()">PROFILE</button>
    <div class="profile" id="pro"  onclick="closeprofile()">
        <p>Welcome</p>
        <p>To access account and manage orders</p>
        <button onclick='window.location.href="signup.php";'>SignUp</button>
        <button onclick='window.location.href="login.php";'>Login</button>
        <p style="border-bottom: 1pt solid black;padding-bottom: 7px;"></p>
        <a href="orders.html">Orders</a><br><br>
        <a href="wishlist">Wishlist</a><br><br>
        <a href="contact_us.html">Contact Us</a><br><br>
    </div>
</div>
<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['submit']))
{
 if($_POST['email']=="" || $_POST['password']=="")
 {
    echo"<script>
         alert('Username ');
         </script>";
 }
 else
 {
 $user=$_POST['email'];
 $pass=$_POST['password'];
 $conn = mysqli_connect("localhost", "root", "","ex_db");

 $query = mysqli_query($conn, "SELECT password,email FROM users WHERE password='$pass' AND email='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1)
 {
 	$_SESSION['username']=$user;
    header("location:page.php");
 }
 else
 {
    echo"<script>
 alert('Username or password is invalid');
 </script>";
 }
 mysqli_close($conn); 
 }
}
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
<body style="background-color: #f3e5f5;">
    <?php
    include('header.php');
    ?>
<div id="Login">
	<form method="POST" style="padding-top:50px;" >
		<div align="center" style="padding-top: 10px;">
  		<span class="username" style="padding-left: 38px; font-size: 25px;">
  		</span>
  		</div>
		<div class="log" style="background-color: pink;"">
			<h3 style="padding:0px 0px 0px 0px">Login</h3>
		<b>Email</b><br/><input type="Email" placeholder="Email" name="email"><br/><br/>
		<b>Password</b><br/><input type="Password" placeholder="At least 6 characters" minlength="6" name="password"><br/><br/> 
		<div style=" padding-top: 12px;padding-bottom: 4px;">
			<button name="submit" type="submit" class="btn1" style="width: 263px; height: 30px;background-color: #e91e63; border: none">Login</button>
		</div>
		</div>
	</form>
	</div>

	<div class="logbor">
		<p>New to Shopify?</p>
	</div>
	<div class="btn9">
		<button type="Submit" onclick="location.href='signup.php';" style="height: 30px;background-color: #e91e63; border: none">Create your Shopify account</button>
	</div>
	
</body>
</html>

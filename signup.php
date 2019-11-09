<!DOCTYPE html>
<?php
  include('conn.php');
  $form_msg="";
  if(isset($_POST['reg_user']))
  {
    $name=trim($_POST['name']);
    $address=trim($_POST['address']);
    $city=trim($_POST['city']);
    $pin=trim($_POST['pin']);
    $email=trim($_POST['email']);
    $password1=trim($_POST['password1']);
    $password2=trim($_POST['password2']);      
   
    if(empty($name)||empty($address)||empty($city)||empty($pin)||empty($email)||empty($password1)||empty($password2))
    {
       echo "<script>alert('Please enter the field');
      window.location.href='signup.php';
      </script>";
    }
    if($password1!=$password2)
    {
      echo "<script>alert('Password should match');
      window.location.href='signup.php';
      </script>";
    }

  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
 
  if ($user)
  {
    if ($user['email'] === $email) {
      echo "<script>alert('User already exists');
       window.location.href='signup.php';
       </script>";
    }
  }
     else
     {$query="INSERT INTO users (name, address, city, pin, email, password) VALUES('$name', '$address', '$city', $pin, '$email', '$password1')";
        mysqli_query($link,$query) or die("Error inserting data.".mysqli_error($link));
         header("location:login.php");
}

}
?>

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
<form method="POST">
<div style="padding-top: 20px;"></div>
<div class="reg"  style="background-color: pink">
<h3 style="padding:0px 0px 0px 0px">Signup with Shopify</h3>
<b>Your name</b><br/><input type="text" name="name"><br/><br/>
        <b>Address</b><br/>
        <textarea cols="26" rows="2" name="address"></textarea><br><br>
        <b>City</b><br/><input type="text" name="city"><br><br>
        <b>Pin</b><br/><input type="text" name="pin"><br><br>
<b>Email</b><br/><input type="Email" name="email"><br><br>
<b>Password</b><br/><input type="Password" placeholder="At least 6 characters" minlength="6" name="password1"><br><br>
        <b>Confirm Password</b><br/><input type="Password" placeholder="At least 6 characters" minlength="6" name="password2"><br><br>
        <div style="top: 10px">
     <button type="submit" name="reg_user" class="btn1" style="width:263px; height:30px;background-color:#e91e63; border: none;position: absolute;top: 700px">
     Continue
   </button></div>
<br><br> <p>Already have an account? <a href="login.php">Login</a></p>

    </div>
</div>
</form>
</body>
</html>
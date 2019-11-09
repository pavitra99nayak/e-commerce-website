<?php
session_start();

$name = "";
$email    = "";
$password1="";
$password2="";
$password="";
$phno="";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'ecommerce');

if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $phno = mysqli_real_escape_string($db, $_POST['phno']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password1)) { array_push($errors, "Password is required"); }
  if ($password1 != $password2) 
  {
  array_push($errors, "The two passwords do not match");
  }

  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['name'] === $name) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (name, phno,email, password) 
          VALUES('$name', $phno,'$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.html');
  }
}
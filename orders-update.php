<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'conn.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

$result=mysqli_query($link,"SELECT * FROM products WHERE id = ".$product_id) or die(mysqli_errno());
    if($result){
      if($obj = $result->fetch_object()) {
        $cost = $obj->price * $quantity;
        $user = $_SESSION["username"];
        $query = mysqli_query($link,"INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");
        if($query){
          $newqty = $obj->qty - $quantity;
          if(mysqli_query($link,"UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id)){
          }
        }
      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");

?>

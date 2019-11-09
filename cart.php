<?php
include 'conn.php';
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
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>
<body style="background-color: #f3e5f5">
  <?php include'loginheader.php';
  ?>
        <?php

          echo '<p style="padding-top:50px"><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = mysqli_query($link,"SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);
            if($result){
              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; 
                $total = $total + $cost; 
                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;background-color:#e91e63;border-radius:2pt;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;background-color:#e91e63" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }
          }
          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';
          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert" style="background-color:#e91e63;padding:10px;">Empty Cart</a>&nbsp;<a href="nike.php" class="button [secondary success alert]" style="background-color:#e91e63;padding:10px;border-radius:2.2pt">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;background-color:#e91e63;padding:10px;border-radius:2.2pt">Cash On Delivery</button></a>';
          }
          else {
            echo '<a href="login.php"><button style="float:right;background-color:#e91e63;padding:10px;border-radius:2.2pt">Login</button></a>';
          }
          echo '</td>';
          echo '</tr>';
          echo '</table>';
        }
        else {
          echo "<center>OPPS!!!You have no items in your shopping cart.</center>";
        }
          echo '</div>';
          echo '</div>';
          ?>
    <div class="row" style="margin-top:10px;">
      <div class="small-12">
      </div>
    </div>
    <center><button onclick="window.location.href='page.php'" style="background-color:#e91e63;padding:10px;border-radius:2.2pt">BACK</button></center>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
  </body>
</html>

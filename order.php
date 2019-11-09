<?php
include 'conn.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
   <title>welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="brand.css">
  <script type="text/javascript" src="style.js"></script>
  <style type="text/css">
    .order{
      background-color: #fce4ec;
      border: 1pt solid black;
      padding: 10px;
    }
  </style>
  </head>
  <body style="background-color: #f3e5f5">
    <?php
    include'loginheader.php';
    ?>
    <div class="row" style=" padding-left: 100px;padding-top: 90px">
      <div class="large-12">
        <h3>Track Your Orders</h3>
        <?php
        $user=$_SESSION['username'];
          $result = mysqli_query($link,"SELECT * from orders where email='$user'");
          if($result) {
            while($obj = $result->fetch_object()) {
              echo '<div class="order">';
              echo '<p><strong>Date of Purchase</strong>: '.$obj->date.'</p>';
              echo '<p><strong>Product Name</strong>: '.$obj->product_name.'</p>';
              echo '<p><strong>Price Per Unit</strong>: '.$obj->price.'</p>';
              echo '<p><strong>Units Bought</strong>: '.$obj->units.'</p>';
              echo '</div><br>';
            }
          }
        ?>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="brand.css">
    <script type="text/javascript" src="style.js"></script>
<style type="text/css">
    .cart{
        display: inline-block;
        padding:10px; 
    }
</style>
<body>
    <?php
    include 'header.php';
    ?>
<?php
        include'conn.php';  
?>

    <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

            $result=mysqli_query($link,"SELECT * from products where brand='nike'") or die(mysqli_errno());          
            if($result === FALSE){
            die(mysql_error());
          }
          if($result){
            while($obj = $result->fetch_object()) {
              echo '<strong><div class="cart" style="padding-top:80px">';
              echo '<img width="200px"; height=200px; src="'.$obj->product_img_name.'"/>';
              echo '<strong><p>'.$obj->product_name.'</p></strong>';
              echo '<strong><p>'.$obj->product_desc.'</p></strong>';
              echo '<strong><p>Items Left '.$obj->qty.'</p></strong>';

              
                echo '<p><a href="login.php?action=add&id='.$obj->id.'"><input type="submit" value="Add To Cart" style="clear:both; background:  #e91e63; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
             
              
              echo '</div>';
              $i++;
            }
          }
          $_SESSION['product_id'] = $product_id;
          echo '</div>';
          echo '</div>';
          ?>
</body>
</html>
<?php
include('footer.php');
?>


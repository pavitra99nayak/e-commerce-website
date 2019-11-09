<!doctype html>
<html class="no-js" lang="en">
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
  <body style="background-color: #fce4ec"> 

   <?php
   include'loginheader.php'
   ?>
      <div >
        <p style="padding: 100px;border: 1pt ;">Success.You have succesfully purchased the product. Congrats!</p>
      </div>
      <center><button onclick="window.location.href='page.php'" style="padding:10px;background-color:#e91e63;border-radius:2.2pt;">BACK</button></center>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
<?php
include'footer.php';
?>

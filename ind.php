<!DOCTYPE html>
<html>
<head>
    <title>welcome</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="style.js"></script>
    <script>
    var i = 0;
    var images = [];
    var time = 3000;

    images[0] = 'images/home1.png';
    images[1] = 'images/home2.png';
    images[2] = 'images/home3.png';

    function changeImg(){
        document.slide.src = images[i];

        if(i < images.length - 1){
            i++;
        } else {
            i = 0;
        }

        setTimeout("changeImg()", time);
    }

    window.onload = changeImg;

</script>
</head>
<body style="background-color: #f5f5f5">
    <div style="padding-bottom: 10px;padding-top: 60px;background-color: #f5f5f5;">
        <center><img name="slide">
</center>
    </div>
<div class="container" >

        <div class="items">
            <a href="nike.php" >
                <img src="images/nike.jpg"  class="thumbnail">
            </a>
        </div>  

        <div class="items">
            <a href="w.php" >
                <img src="images/w.jpg"  class="thumbnail">
            </a>
        </div>  

        <div class="items">
            <a href="rod.php" >
                <img src="images/rod.jpg"  class="thumbnail">
            </a>
      </div>
       <div class="items">
            <a href="rod.php">
                <img src="images/unit.jpg"  class="thumbnail">
            </a>
        </div>
         <div class="items">
            <a href="only.php" >
                <img src="images/only.jpg"  class="thumbnail">
            </a>
        </div>
    
</div>
<div style="padding-top:20px"></div>
 <div class="container">
        <div class="items">
            <a href="only.php" >
                <img src="images/hrx.jpg"  class="thumbnail">
            </a>
        </div>  
        <div class="items">
            <a href="nike.php" >
                <img src="images/sass.jpg"  class="thumbnail">
            </a>
        </div>    
        <div class="items">
            <a href="w.php" >
                <img src="images/uspolo.jpg"  class="thumbnail">
            </a>
      </div> 
     <div class="items">
            <a href="rod.php" >
                <img src="images/dressberry.jpg"  class="thumbnail">
            </a>
      </div> 
       <div class="items">
            <a href="w.php" >
                <img src="images/oks.jpg"  class="thumbnail">
            </a>
      </div> 
</div>
<div style="padding-top:20px"></div>
 <div class="container">
        <div class="items">
            <a href="w.php" >
                <img src="images/h&m.jpg"  class="thumbnail">
            </a>
        </div>  
        <div class="items">
            <a href="nike.php" >
                <img src="images/anouk.jpg"  class="thumbnail">
            </a>
        </div>    
        <div class="items">
            <a href="rod.php" >
                <img src="images/fossil.jpg"  class="thumbnail">
            </a>
      </div> 
     <div class="items">
            <a href="only.php" >
                <img src="images/redtape.jpg"  class="thumbnail">
            </a>
      </div> 
       <div class="items">
            <a href="w.php" >
                <img src="images/levis.jpg"  class="thumbnail">
            </a>
      </div> 
</div>
<div class="btn3">
   <p><center style="font-size: 30px; color: white;">CELEBRATING ALL YOUR FAVOURITES<br><p style="font-size: 40px">Top Categories</p></center></p> 
 <div class="containerimg">
        <div class="imgitems">
            <a href="#" >
                <img src="images/img1.jpg"  class="thumbnail">
            </a>
        </div>  
        <div class="imgitems">
            <a href="#" >
                <img src="images/img2.jpg"  class="thumbnail">
            </a>
        </div>    
        <div class="imgitems">
            <a href="#" >
                <img src="images/img3.jpg"  class="thumbnail">
            </a>
      </div> 
     <div class="imgitems">
            <a href="#" >
                <img src="images/img4.jpg"  class="thumbnail">
            </a>
      </div> 
       <div class="imgitems">
            <a href="#" >
                <img src="images/img5.jpg"  class="thumbnail">
            </a>
      </div> 
</div>

<div class="containerimg">
        <div class="imgitems">
            <a href="#" >
                <img src="images/img6.jpg"  class="thumbnail">
            </a>
        </div>  
        <div class="imgitems">
            <a href="#" >
                <img src="images/img7.jpg"  class="thumbnail">
            </a>
        </div>    
        <div class="imgitems">
            <a href="#" >
                <img src="images/img8.jpg"  class="thumbnail">
            </a>
      </div> 
     <div class="imgitems">
            <a href="#" >
                <img src="images/img9.jpg"  class="thumbnail">
            </a>
      </div> 
       <div class="imgitems">
            <a href="#" >
                <img src="images/img10.jpg"  class="thumbnail">
            </a>
      </div> 
</div>
</div>
</body>
</html>
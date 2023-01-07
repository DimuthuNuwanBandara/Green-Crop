<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	
  <script type="text/javascript" src="javascript/p-head.js"></script> 
  <script type="text/javascript" src="javascript/gallary.js"></script>
  <script type="text/javascript" src="javascript/mainimage.js"></script> 
  
  <script src="https://use.fontawesome.com/23c780edce.js"></script>
  <script src="https://use.fontawesome.com/1a6d7250f8.js"></script>

    <link rel="stylesheet" type="text/css" href="css/about-us.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/gallary.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/mainImages.css">
    <link rel="stylesheet" type="text/css" href="css/menu1.css">

    <link rel="stylesheet" type="text/css" href="css/test.css">

</head>
<body>


<?php require_once('header.php'); ?>
 <div class="main-image-slides"><!-- main-image-slides -->
          <div class="slideshow-container">

              <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="images/banner/B1.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="images/banner/B2.jpg" style="width:100%">
              </div>

              <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="images/banner/B3.jpg" style="width:100%">
              </div>

               <div class="mySlides fade">
                <div class="numbertext">4 / 3</div>
                <img src="images/banner/B4.jpg" style="width:100%">
              </div>

               <div class="mySlides fade">
                <div class="numbertext">5 / 3</div>
                <img src="images/banner/B5.jpg" style="width:100%">
              </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

          </div>
          <br>
          <div style="text-align:center">
      <!--       <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span>  -->
          </div>
          <script>
           var slideIndex = 1;
           showSlides(slideIndex);
          </script>
</div><!-- main-image-slides -->




    </body>
</html> 
<?php require_once('footer.php'); ?>
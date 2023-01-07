<!DOCTYPE html>
<html>
<head>
    <title>PROMOTION</title>
    
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
<body style="background-color:#f3f3f5;">



<?php require_once('header.php'); ?>

<div class="test1"> </div>


<section style="text-align: center; ">
        <h1 class="main-name-about" style="font-family: Asenine; font-size: 60px; color: #6fbf08">P R O M O T I O N</h1>    
</section>

<section>
    <div class="full-blog clearfix">
         
        <div class="main-blog clearfix">

           <?php
          $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');
          $res=mysqli_query($con,"SELECT * FROM `promotion`");
          while($row=mysqli_fetch_array($res))
          {
            echo"  <div class=\"main-blog-margin clearfix\"> ";
            echo'    <img class= "p-2" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"width=100%" />';
            echo"  </div><!-- main-blog-margin --> ";
          } 
          ?>
          
          
            
         
        </div><!-- main-blog -->



       

    </div><!-- full-blog -->
</section>





<section>
<div class="test2"> </div>
</section>

<!-- footer -->
<?php require_once('footer.php'); ?>
</body>
</html> 
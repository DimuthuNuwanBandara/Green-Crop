<?php require_once('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>PRODUCTS</title>
	
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/mainImages.css">
    <link rel="stylesheet" type="text/css" href="css/menu1.css">

    <link rel="stylesheet" type="text/css" href="css/products.css">
    <link rel="stylesheet" type="text/css" href="css/test.css">

</head>
<body>

<div class="test1"></div>

<!-- /*ourProducts -->
<section>
  <div class="index-menu clearfix">
     <h1 style="color: #6fbf08">O U R   P R O D U C T S</h1>
     
     <div class="index-menu-main clearfix">
      <h4 class="productsWhat" >Fruits</h4>
<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"fruits\";");

   while($row=mysqli_fetch_array($res))
   {
  echo"  <div class=\"index-menu-item\">    ";
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="170" width="170"';
  echo"       <h4 style=\"font-family: Calibri;\">{$row['Name']}</h4>    ";
  echo"       <p style=\"font-size: 20px;\">{$row['Description']}</p>             ";
  echo"       <p style=\"font-size: 25px;\">Rs {$row['Price']}.00</p>             ";
  echo"       <div class=\"menu-item-name\">    ";
  echo"         <a href=\"products.php\"><h6 style=\"font-family: Calibri;\">Buy Now</h6></a>    ";
  echo"       </div><!-- menu-item-name -->    ";
  echo"     </div>    ";

//{$row['id']}

//{$row['price']}


   
   } 
?>
         

                                   
         
     </div><!-- index-menu-main -->


     <div class="index-menu-main clearfix">
      <h4 class="productsWhat" >Cut Flowers</h4>
<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"cut flowers\";");

   while($row=mysqli_fetch_array($res))
   {
  echo"  <div class=\"index-menu-item\">    ";
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="170" width="170"';
  echo"       <h4 style=\"font-family: Calibri;\">{$row['Name']}</h4>    ";
  echo"       <p style=\"font-size: 20px;\">{$row['Description']}</p>             ";
  echo"       <p style=\"font-size: 25px;\">Rs {$row['Price']}.00</p>             ";
  echo"       <div class=\"menu-item-name\">    ";
  echo"         <a href=\"products.php\"><h6 style=\"font-family: Calibri;\">Buy Now</h6></a>    ";
  echo"       </div><!-- menu-item-name -->    ";
  echo"     </div>    ";

//{$row['id']}

//{$row['price']}


   
   } 
?>
         

                                   
         
     </div><!-- index-menu-main -->


     <div class="index-menu-main clearfix">
      <h4 class="productsWhat">Plants</h4>
<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"select * from products WHERE `category`=\"plants\"; ");

   while($row=mysqli_fetch_array($res))
   {
  echo"  <div class=\"index-menu-item\">    ";
  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['Image'] ).'" height="170" width="170"';
  echo"       <h4 style=\"font-family: Calibri;\">{$row['Name']}</h4>    ";
  echo"       <p style=\"font-size: 20px;\">{$row['Description']}</p>             ";
  echo"       <p style=\"font-size: 25px;\">Rs {$row['Price']}.00</p>             ";
  echo"       <div class=\"menu-item-name\">    ";
  echo"         <a href=\"products.php\"><h6 style=\"font-family: Calibri;\">Buy Now</h6></a>    ";
  echo"       </div><!-- menu-item-name -->    ";
  echo"     </div>    ";

//{$row['id']}

//{$row['price']}


   
   } 
?>
         

                                   
         
     </div><!-- index-menu-main -->








  </div><!-- index-menu -->

</section>

<?php require_once('footer.php'); ?>


    </body>
</html> 
<?php require_once('header.php'); ?>



<!DOCTYPE html>
<html>
<head>
  <title>GALLARY</title>
  
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
<body style="background-color:#F1F1F1">

<div class="test1"> </div>


<section style="text-align: center; ">
        <h1 class="main-name-about" style="font-family: Asenine; font-size: 60px; color: #6fbf08">G A L L E R Y</h1>    
    </div>
</section>


<section style="margin-top: 25px; "> 


    <div style="text-align:center">
  
      <p style="color: black;">Click on the images below increase size:</p>
    </div>

    <!-- The four columns -->

 <div class="row clearfix"> 
    <?php
     $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');
     $res=mysqli_query($con,"SELECT * FROM `gallery`");
     while($row=mysqli_fetch_array($res))
     {
 echo"     <div class=\"column clearfix\"> ";
 echo'    <img class= "p-2" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  onclick="myFunction(this);" />';
 echo"     </div> ";
      } 
    ?>


    </div>

    <div class="container">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
      <img id="expandedImg" style="width:100%">
      <div id="imgtext"></div>
    </div>
</section>

<section>
<div class="test2"> </div>
</section>

<!-- footer -->
<?php require_once('footer.php'); ?>

</body>
</html> 
<?php require_once('header.php'); ?>


<?php 
        $firstname = "";
        $lastname = "";
        $message = "";
        $email = "";
        $bbb=0;
      

 ?>


<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $con = mysqli_connect('localhost','root','','green_crop') or die('Unable To connect');

      $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
      $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
      $message = mysqli_real_escape_string($con, $_POST['message']);
      $email = mysqli_real_escape_string($con, $_POST['email']);


  $sql = "INSERT INTO usermessages( fistname, lastname, message, email)  VALUES (\"$firstname\",\"$lastname\",\"$message\",\"$email\")";

    $stmt = mysqli_prepare($con,$sql);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
        $firstname = "";
        $lastname = "";
        $message = "";
        $email = "";
        $bbb=1;
    }else{
      
        $msg = "exe qurey";
    }
    //echo "string";
    mysqli_close($con);
}else{
  //$msg = "conection";
}
?>

<?php 
if ($bbb==1) {
  header('location: contact.php');
}

?>






<!DOCTYPE html>
<html>
<head>
    <title>CONTACT US</title>
    
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


<div class="test1"> </div>


<section style="text-align: center; ">
        <h1 class="main-name-about" style="font-family: Asenine; font-size: 60px; color: #6fbf08">C O N T A C T  U S</h1>    
</section>

<section>
    <div class="main-contact clearfix">
        <div class="main-contact-center">

            <div class="main-form clearfix">
                <div class="formm" style="color: #313131">
                    <h1>Get in Touch</h1>
                    <p>we would love to help you start exceding your  goals!<br>We are available 36/7 by Fax, e-mail or by phone.<br>You can also use our quick contact form to ask a question about our services.</p>
                    <form  method="post" class="form" enctype="multipart/form-data">

                            <label for="fname" style="color: #515151">FIRST NAME*</label>  
                            <input type="text" id="fname" name="firstname" placeholder="First name..." required <?php echo 'value="' . $firstname . '"'; ?> ><br> 

                            <label for="lname" style="color: #515151">LAST NAME*</label>  
                            <input type="text" id="lname" name="lastname" placeholder="Last name..." required <?php echo 'value="' . $lastname . '"'; ?> ><br>  

                            <label for="lname" style="color: #515151">YOUR MESSAGE*</label><br>                            
                            <textarea type="text" id="massege" name="message" placeholder="Write your massege..." required ><?php echo "$message"; ?></textarea><br>


                            <label for="email" style="color: #515151">E-MAIL*</label>  <br>
                            <input type="email" id="email" name="email" placeholder="E-mail..." required <?php echo 'value="' . $email . '"'; ?> ><br>

                            <button type="submit" name="submit" id="submit" style="color: #515151" >SEND MASSAGE... </button>
                    </form>
                </div>
            </div><!-- main-form -->


            <div class="contact-right clearfix">  
                <div class="contact-child clearfix">
 
                    <dvi class="contact-media contact-followus clearfix">
                        <h3>FOLLOW-US</h3>
                        <div class="riht-line">
                             <div class="riht-line-color">  </div>
                        </div>
                            <ul>
                            <li><a href=""><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-pinterest-square fa-fw" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus fa-fw" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-rss-square fa-fw" aria-hidden="true"></i></a></li>
                            </ul>
                    </dvi><!-- contact-followus -->

                    <dvi class="contact-media contact-followus clearfix">
                        <h3>PHONE</h3>
                        <div class="riht-line">
                             <div class="riht-line-color">  </div>
                        </div>
                            <ul>
                            <li><a href=""><i class="fa fa-twitter-square fa-fw" aria-hidden="true"></i></a></li>
                            <li>+94-775236273</li>
                            </ul>
                    </dvi><!-- contact-followus -->

                    <dvi class="contact-media contact-followus clearfix">
                        <h3>ADDRESS</h3>
                        <div class="riht-line">
                             <div class="riht-line-color">  </div>
                        </div>
                            <ul>
                            <li><a href=""><i class="fa fa-rss-square fa-fw" aria-hidden="true"></i></a></li>
                            <li>Puththalam Road, Kurunagala.</li>
                            </ul>
                    </dvi><!-- contact-followus -->

                    <dvi class="contact-media contact-followus clearfix">
                        <h3>OPENING HOURS</h3>
                        <div class="riht-line">
                             <div class="riht-line-color">  </div>
                        </div>
                            <ul>
                            <li><a href=""><i class="fa fa-rss-square fa-fw" aria-hidden="true"></i></a></li>
                            <li>9.00am - 10.00pm</li>
                            </ul>
                    </dvi><!-- contact-followus -->
                </div><!-- contact-child -->
            </div><!-- contact-right -->

        </div><!-- main-contact-center -->
    </div><!-- main-contact -->
</section>

<section>
    <div id="map"></div><!---map -->
        <Script> 
            function initMap(){
                var location = {lat: 7.4818, lng: 80.3609};
                var map = new google.maps.Map(document.getElementById("map"),{
                    zoom:14,
                    center:location
                });
                var marker = new google.maps.Marker({
                    position: location,
                    map: map
                });
                var infowindow = new google.maps.infowindow({
                    content:'<h1> NOW EAT SHOP</h1>'
                });
                marker.addListener('click',function (){
                    infowindow.open(map,marker);
                });
            }
        </Script>  
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap" ></script> 
    
</section>


<section>
<div class="test2"> </div>
</section>

<?php require_once('footer.php'); ?>


</body>
</html> 
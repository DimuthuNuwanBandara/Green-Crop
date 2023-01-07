<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php   
if(!isset($_SESSION['user_id'])) {
            header('Location: login.php');
        }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	
	<div class="a-main_admin clearfix">	
	<div class="a-head clearfix">	
		<h2 style="color: white; ">Manage Green Crop System</h2>
	</div><!-- a-head -->


	<div class="a-tabs clearfix">
		
		<div class="a-logo ">
		<img src="img/logo1.jpg" style="height: 100%; width: auto;">	
		</div><!-- a-logo -->

		<form method="post">
		<button type="submit" id="subbu" name="click1">Product Details</button>
		<button type="submit" id="subbu" name="click2">Users Messages</button>
		<button type="submit" id="subbu" name="click3">Promotions</button>
		<button type="submit" id="subbu" name="click4">Manage Gallery</button>
		<button type="submit" id="subbu" name="click5">Password Change</button>
		<button type="submit" id="subbu" name="logout">Log Out</button>
		</form> 
 		 

	</div><!-- tabs -->
	    
 

	<div class="a-display clearfix">
        <?php
        $tabbb=$_GET['tabb'];
        if(array_key_exists('logout', $_POST)) { 
            button6(); 
            //log out
        }
        else if(array_key_exists('click1', $_POST)) { 
            $tabbb=3; 
        } 
        else if(array_key_exists('click2', $_POST)) { 
            $tabbb=4; 
        } 
 		else if(array_key_exists('click3', $_POST)) { 
            $tabbb=5; 
        }
        else if(array_key_exists('click4', $_POST)) { 
            $tabbb=6; 
        }
        else if(array_key_exists('click5', $_POST)) { 
            $tabbb=7; 
        }



        if($tabbb==1) { 
            addproducts();

        } else if($tabbb==2) { 
            editproducts();//edit products

        } else if($tabbb==3) { 
            button1();//product detailsa

        } else if($tabbb==4) { 
            button2();//user massage

        } else if($tabbb==5) { 
            button3();//promotion

        } else if($tabbb==6) { 
            button4();//galley

        } else if($tabbb==7) { 
            button5();//password

        }
        else{

        }


           
        function button1() { 
            include('inc/product_details.php');
        } 
        function button2() {  
            include('inc/users_messages.php');
        }
        function button3() { 
            include('inc/promo.php');
        }
        function button4() { 
            include('inc/gallery.php');   
        }
        function button5() { 
            include('inc/password.php');   
        }




        function button6() { 

        $_SESSION = array();

        if(isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time()-86400, '/');
        }

        session_destroy();

        //header('Location: index.php');
        header('Location: login.php?logout=yes');
        }

        function addproducts() { 
            include('inc/addproducts.php');
        }
        function editproducts() { 
            include('inc/updateproducts.php');
        } 
            ?> 
  
	</div><!-- a-display -->

</div><!-- a-main_admin -->
</body>
</html>
<?php 
  $tabbb=$_GET['tabb'];
if($tabbb==7){

}else{
  header('location: admin.php?tabb=7');
}
 ?>
<?php 
				$username = "";
				$bbb=0;

 ?>


<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root','','green_crop') or die('Unable To connect');


	  $username = mysqli_real_escape_string($con, $_POST['username']);
      $Password1 = mysqli_real_escape_string($con, $_POST['Password1']);
      $Password2 = mysqli_real_escape_string($con, $_POST['Password2']);

      if ($Password1==$Password2) {
  $errors = array();

	      $sql = "UPDATE `user` SET `email`= \"{$username}\" ,`password`= \"$Password1\" WHERE `id` = \"1\"  ";
        $stmt = mysqli_prepare($con,$sql);
        mysqli_stmt_execute($stmt);

        $check = mysqli_stmt_affected_rows($stmt);
            if($check==1){
		          $username = "";
               $bbb=1;
            }else{

            }
         mysqli_close($con);
      }else{
         $errors[]= 'Pssword is not match';
      }
}else{
  //echo "lkjkijkljkjk";
}

?>


<?php 
if ($bbb==1) {
	$bbb==0;
	header('location: admin.php?tabb=7');
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
</head>
<body>
	<!--  -->
<div class="maingallery clearfix">	
	<h1 id="main_topic" >Change Password</h1>
	<div class="addimage clearfix" style="width: 430px;height: auto;"> 
	<form  method="POST" class="userform" id="Addproducts" enctype="multipart/form-data">
				
			<p>	
					<label for="">  User Name    </label>
					<input type="text" name="username" required  <?php echo 'value="' . $username . '"'; ?> >
			</p>
      <p> 
          <label for="">  Password      </label>
          <input type="password" name="Password1" required  >
      </p>

      <p> 
          <label for="">  Re-Password</label>
          <input type="password" name="Password2" required >
      </p>
          <?php 
          if(isset($errors) && !empty($errors)) {
            echo '<p class="error" style="color: red; margin-left: 50px;font-size: 10px;"> Password not match</p>';
          }
         ?>
			<p>	
					<label for="">&nbsp;</label>
					<Button type="submit" name="submit" id="submit" style="width: 250px; color: #515151;">Change Password</Button>
			</p>	
	
	</form>
	</div><!-- addimage -->

</div><!-- mainaddproducts -->
</body>
</html>




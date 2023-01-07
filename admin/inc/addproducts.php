<?php 
	$tabbb=$_GET['tabb'];
if($tabbb==1){

}else{
	header('location: admin.php?tabb=1');
}
 ?>



<?php require_once('connection.php'); ?>
<?php 
				$category = "";
				$name = "";
				$discription = "";
				$price = "";
				$bbb=0;
			

 ?>


<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['file']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','green_crop') or die('Unable To connect');

    	$category = mysqli_real_escape_string($con, $_POST['category']);
			$name = mysqli_real_escape_string($con, $_POST['name']);
			$discription = mysqli_real_escape_string($con, $_POST['discription']);
			$price = mysqli_real_escape_string($con, $_POST['price']);



	$sql = "INSERT INTO `products`( `category`, `name`, `discription`, `price`,`image`)";
    $sql.= " VALUES (\"$category\",\"$name\",\"$discription\",\"$price\",?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
    	$category = "";
		$name = "";
		$discription = "";
		$price = "";
        $msg = 'Image Successfullly UPloaded';
        $bbb=1;
    }else{
        $msg = 'Error uploading image';
    }
    //echo $msg;
    mysqli_close($con);
}else{
	//echo "Add Error";
}
?>

<?php 
if ($bbb==1) {
	header('location: admin.php?tabb=3');
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/addproducts.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<!--  -->
<div class="mainaddproducts clearfix">	
	<h1 id="main_topic">Add New Product</h1>
	<form  method="post" class="userform" id="Addproducts" enctype="multipart/form-data">
			<p>	
					<label for=""> Category   (fruits, cut flowers, plants)</label>
					<input type="text" name="category" required <?php echo 'value="' . $category . '"'; ?> >
			</p>
			<p>	
					<label for=""> Name</label>
					<input type="text" name="name" required <?php echo 'value="' . $name . '"'; ?> >
			</p>	
			<p>	
					<label for=""> Discription</label>
					<input type="text" name="discription" required  <?php echo 'value="' . $discription . '"'; ?> >
			</p>	
			<p>	
					<label for=""> Price</label>
					<input type="text" name="price" required  <?php echo 'value="' . $price . '"'; ?> >
			</p>
			<p>
					<label for="">Image</label>
					<input type="file" name="file" required style="border: none;">
			</p>
				
			<p>	
					<label for="">&nbsp;</label>
					<Button type="submit" name="submit" id="submit">Save</Button>
			</p>	

<script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  




	</form>
</div><!-- mainaddproducts -->
</body>
</html>




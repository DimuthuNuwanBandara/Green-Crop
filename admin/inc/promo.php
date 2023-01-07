<?php 
  $tabbb=$_GET['tabb'];
if($tabbb==5){

}else{
  header('location: admin.php?tabb=5');
}
 ?>
<?php 
				$discription = "";
				$bbb=0;

 ?>


<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'  && !empty($_POST['discription'])){
    $image = $_FILES['file']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost','root','','green_crop') or die('Unable To connect');

			$discription = mysqli_real_escape_string($con, $_POST['discription']);



	$sql = "INSERT INTO `promotion`( `discription`, `image`)";
    $sql.= " VALUES (\"$discription\",?)";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);

    $check = mysqli_stmt_affected_rows($stmt);
    if($check==1){
		$discription = "";
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
	$bbb==0;
	header('location: admin.php?tabb=5');
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
	<h1 id="main_topic" style="margin-top: 5px;margin-bottom:10px; ">Promotion</h1>
	<div class="addimage clearfix"> 
	<form  method="POST" class="userform" id="Addproducts" enctype="multipart/form-data">
				
			<p>	
					<label for="">  Description  </label>
					<input type="text" name="discription" required  <?php echo 'value="' . $discription . '"'; ?> >
			</p>
			<p>
					<label for="">  Image           </label>
					<input type="file" name="file" required style="border: none;">
			</p>
				
			<p>	
					<label for="">&nbsp;</label>
					<Button type="submit" name="submit" id="submit" style="color: #515151";>Save</Button>
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
	</div><!-- addimage -->

	<div class="imagegride clearfix" > 

<?php
                     $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');
                     $res=mysqli_query($con,"SELECT * FROM `promotion`");
                     echo "</tr>";
                     while($row=mysqli_fetch_array($res))
                     {

        echo"  <div class=\"portfolio-item clearfix\" style=\"width: 110px; height:135px; float: left;margin: 5px;\">";
        echo"    <div class=\"bg-transparen \" style=\"background: rgba(144,238,144);\">";
        echo'    <img class= "p-2" src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"  width="100px" height="100px" alt="" style="margin-left: 5px;margin-top: 5px;"/>';
                            
        echo"    </div>";
        echo"            <button style=\"width: 100%;\" class=\"btn btn-small bg-danger btn-outline-light btn-sm \"onclick=\"location.href='inc/deletepromo.php?user_id={$row['id']}';\">Delete</button>";
        echo"  </div>            ";
                    } 
                     
                  ?>




	</div><!-- imagegride -->
</div><!-- mainaddproducts -->
</body>
</html>




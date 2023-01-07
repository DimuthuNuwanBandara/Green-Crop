<?php 
  $tabbb=$_GET['tabb'];
if($tabbb==4){

}else{
  header('location: admin.php?tabb=4');
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="css/users_messages.css">
</head>
<body>
	<style>
		a{text-decoration: none;}
	</style>
	<div class="main-message clearfix" >
	<h1 id="main_topic">User Messages</h1>

	<?php
   $con = mysqli_connect('127.0.0.1:3306','root','','green_crop') or die('Unable To connect');


   $res=mysqli_query($con,"SELECT * FROM `usermessages` ");
   echo "<table id=\"customers\">";
   echo "<tr>";
              // echo "<th>id</th>";
               echo "<th>First Name</th>  ";
               echo "<th>Last Name</th> ";
               echo "<th>Message</th>";
               echo "<th>Email</th> ";
               echo "<th>Delete</th>   ";
   echo "</tr>";
   while($row=mysqli_fetch_array($res))
   {

             echo" <tr >";
               //echo "<td>{$row['id']}</td>";
               echo "<td>{$row['firstname']}</td>";
               echo "<td>{$row['lastname']}</td>";
               echo "<td >{$row['message']}</td>";
               echo "<td >{$row['email']}</td>";
               echo "<td><a href=\"inc/deleteusermessage.php?user_id={$row['id']}\">Delete    </a></td>";
               
            echo" </tr>";
   
   } 
   echo "</tr>";
   
   echo "</table>";
?>





	</div>
</body>
</html>
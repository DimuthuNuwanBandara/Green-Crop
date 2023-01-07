<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>


<?php 
	//check for from submission
	if(isset($_POST['submit'])) {

		$errors = array();
		//check if the username and password has been entered
		if(!isset($_POST['email']) || strlen(trim($_POST['email'])) <1 ) {
			$errors[] = 'Username is Missing / Invalid';
		}
		if(!isset($_POST['password']) || strlen(trim($_POST['password'])) <1 ) {
			$errors[] = 'Password is Missing / Invalid';
		}
	//chek if there are any errors in the form
		if(empty($errors)) {
		//save uername and password into variables
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$hashed_password = sha1($password);
	//prepare query
			$query = "SELECT * FROM user
						WHERE email ='{$email}'
						AND password = '{$password}'
						LIMIT 1";
			$result_set = mysqli_query($connection, $query);
			
			if($result_set) {
				//query successful
				if(mysqli_num_rows($result_set) == 1){
					//valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['first_name'] = $user['first_name'];
					//redirect to user.php
					header('Location: admin.php?tabb=3');
				} else {
					//uesrname and password invalid
					$errors[] = 'Invalid Username / Password';
				}
			} else {
				$errors[] = 'Database query failed';
			}			
	//check if the user is valid
 	
	//if not display the error		
		}
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

	<div class="l-main clearfix">

	<div class="l-img">
		<img src="img/logo2.png" width="100px" height="auto" style="margin-left:20px;margin-top:25px;">
	</div>
	<div class="login">
		<form action="login.php" method="post">
			
				<h1 style="text-align: center; margin-top: 50px;">Log In</h1>
				<!-- <p class="error"> Invalid Username/ Password</p> -->
				  <div class="l-f clearfix">
				<p>
					<label for="">Username :</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="">Password  :</label>
					<input type="Password" name="password" id="" placeholder="Password">
				</p>
				<p">
					<button type="submit" name="submit">Log In</button>
				</p>
					<?php 
					if(isset($errors) && !empty($errors)) {
						echo '<p class="error" style="color: red; margin-left: 50px;font-size: 10px;"> Invalid Username/ Password</p>';
					}
				 ?>
				 <?php 	
				 	if(isset($_GET['logout'])) {
				 		echo '<p class="info"> </p>';
				 	}
				  ?>
			
				</div><!-- l-f -->
			
		</form>
	</div><!-- login -->
	</div>
</body>
</html>

<?php mysqli_close($connection); ?>
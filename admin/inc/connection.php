<?php //session_start(); ?>
<?php 
	
	//$connection = mysqli_connect(dbserver, dbuser, dbpass, dbname);
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass ='';
	$dbname = 'green_crop';

	$connection = mysqli_connect('localhost', 'root', '', 'green_crop');

	//mysqli_connect_errno();
	//mysqli_connect_error();

	if(mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	} else {
		//echo " Connection successful.";
	}

 ?>
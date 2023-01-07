
<?php
$user_id = $_GET['user_id'];
    $con = mysqli_connect('localhost','root','','green_crop') or die('Unable To connect');

	$sql = "DELETE FROM `gallery` WHERE `id` = \"{$user_id}\"; ";

    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_execute($stmt);

    mysqli_close($con);
    header('location: ../admin.php?tabb=6');

?>

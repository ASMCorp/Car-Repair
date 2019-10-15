<?php
$username = $_POST['username'];
$password = $_POST['password'];
require_once 'configure.php';
if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
else{
	$sql = "SELECT * FROM `admin` WHERE username = '$username' and password = '$password' and admin = 1";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result) > 0){
		
		 echo '<script>window.location.href = "view.php";</script>';
		
	}
	else{
		echo("Sorry <b>$username</b>, wrong username/password. ");
	}
	
	
	
}

?>
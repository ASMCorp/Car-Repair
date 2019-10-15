<?php

require_once 'configure.php';
$name = $_POST["clientname"];
$add = $_POST["address"];
$phone = $_POST["phone"];
$license = $_POST["license"];
$engine = $_POST["engine"];
$date = $_POST["date"];
session_start();
$_SESSION['date']= $date;
$_SESSION['license']= $license;

if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
else{
	$sql1 ="INSERT INTO `info`(`name`, `address`, `phone`, `license`, `engine`, `data`) VALUES ('$name', '$add', '$phone', '$license', '$engine','$date')" ;
	$result = mysqli_query($con, $sql1);
	
	echo("<form action='info.php' method='post'>");
	echo("Select a Mechanic:");
	echo("<br>");
	
	echo("<select name= 'mechanic'>");
	
	$sql = "select * from count where date='$date'";
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result)){
		$sql = "SELECT m1 FROM count WHERE m1<4 AND date= '$date'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)){
			echo("<option value='1'>Mechanic 1</option>");
		}
		
		$sql = "SELECT m2 FROM count WHERE m2<4 AND date= '$date'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)){
			echo("<option value='2'>Mechanic 2</option>");
		}
		
		$sql = "SELECT m3 FROM count WHERE m3<4 AND date= '$date'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)){
			echo("<option value='3'>Mechanic 3</option>");
		}
		
		$sql = "SELECT m4 FROM `count` WHERE date = '$date' AND m4<4";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)){
			echo("<option value='4'>Mechanic 4</option>");
		}
		
		$sql = "SELECT m5 FROM count WHERE m5<4 AND date= '$date'";
		$result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)){
			echo("<option value='5'>Mechanic 5</option>");
		}
		
	}
	else{
		
		echo("<option value='1'>Mechanic 1</option>");
		echo("<option value='2'>Mechanic 2</option>");
		echo("<option value='3'>Mechanic 3</option>");
		echo("<option value='4'>Mechanic 4</option>");
		echo("<option value='5'>Mechanic 5</option>");
			
		
	}
	
	echo("</select>");
	echo("<input type='submit'>");
	echo("</form>");
	
	$sql ="DELETE FROM `info` WHERE data='0000-00-00'";
	$r=mysqli_query($con,$sql);
	
}



?>
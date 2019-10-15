<?php

require_once 'configure.php';
if(isset($_POST["updated_date"])){
	$date = $_POST["updated_date"];
}

session_start();
$_SESSION['updated_date']=$date;


echo("<form action='final_update.php' method='post'>");
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
	


?>
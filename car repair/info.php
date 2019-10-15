<?php

require_once 'configure.php';
$mechanic = $_POST["mechanic"];
session_start();
$data = $_SESSION['date'];
$date = $data;
$licensa = $_SESSION['license'];
$license= $licensa;
if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
else{
	$sql1 ="UPDATE `info` SET `mnumber`= '$mechanic' WHERE `license`= '$license'";
	$r= mysqli_query($con,$sql1);
	$sql = "select * from count where date='$date'";
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result)){
		switch($mechanic){
			case '1':
				$s = "UPDATE `count` SET `m1`= m1+1 WHERE `date`= '$date'";
				break;
			case '2':
				$s = "UPDATE `count` SET `m2`= m2+1 WHERE `date`= '$date'";
				break;
			case '3':
				
				$s = "UPDATE `count` SET `m3`= m3+1 WHERE `date`= '$date'";
				break;
			case '4':
				$s = "UPDATE `count` SET `m4`= m4+1 WHERE `date`= '$date'";
				break;
			case '5':
				$s = "UPDATE `count` SET `m5`= m5+1 WHERE `date`= '$date'";
				break;
			default:
				echo("something wrong");
		}
		$r = mysqli_query($con ,$s);
	}
	else{
		switch($mechanic){
			case '1':
				$s= "INSERT INTO `count`(`date`, `m1`) VALUES ('$date',m1+1)";
				break;
			case '2':
				$s= "INSERT INTO `count`(`date`, `m2`) VALUES ('$date',m2+1)";
				break;
			case '3':
				$s= "INSERT INTO `count`(`date`, `m3`) VALUES ('$date',m3+1)";
				break;
			case '4':
				$s= "INSERT INTO `count`(`date`, `m4`) VALUES ('$date',m4+1)";
				break;
			case '5':
				$s= "INSERT INTO `count`(`date`, `m5`) VALUES ('$date',m5+1)";
				break;
			default:
				echo("something wrong");
		}
			$r = mysqli_query($con,$s);
	}
	echo("Your appointment has been registered. Thank you for using our service.");
	$sql ="DELETE FROM `count` WHERE data='0000-00-00'";
	$r=mysqli_query($con,$sql);

}
?>
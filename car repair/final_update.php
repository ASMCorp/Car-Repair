<?php
require_once 'configure.php';
$mechanic = $_POST["mechanic"];
session_start();
$date = $_SESSION['updated_date'];

$license=$_SESSION['license'];


$sql_date = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql_date);
				$row= $result->fetch_array();
				$old_date = $row['data'];

$sql_mechanic = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql_mechanic);
				$row= $result->fetch_array();
				$old_mechanic = $row['mnumber'];


switch($old_mechanic){
			case '1':
				$s = "UPDATE `count` SET `m1`= m1-1 WHERE `date`= '$old_date'";
				break;
			case '2':
				$s = "UPDATE `count` SET `m2`= m2-1 WHERE `date`= '$old_date'";
				break;
			case '3':
				
				$s = "UPDATE `count` SET `m3`= m3-1 WHERE `date`= '$old_date'";
				break;
			case '4':
				$s = "UPDATE `count` SET `m4`= m4-1 WHERE `date`= '$old_date'";
				break;
			case '5':
				$s = "UPDATE `count` SET `m5`= m5-1 WHERE `date`= '$old_dateS'";
				break;
			default:
				echo("something wrong");
		}
		$r = mysqli_query($con ,$s);



$sql1 ="UPDATE `info` SET `mnumber`= '$mechanic', `data`='$date' WHERE `license`= '$license'";
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
	echo("Appointment has been changed successfully.");
	$sql ="DELETE FROM `count` WHERE data='0000-00-00'";
	$r=mysqli_query($con,$sql);
session_destroy();
?>
<html>
<body>
	<br>
<button type="button"> <a href="view.php">GO TO LIST</a> </button>	</body>
</html>
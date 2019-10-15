<?php
require_once 'configure.php';
$license= $_GET["license"];
session_start();
$_SESSION['license']= $license;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="POST" action="update.php">
	<table>
		<tr>
		<td> Name: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$name = $row['name'];
				echo("$name");
				?>
				
			</td>
		</tr>
		<tr>
		<td> Address: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$address = $row['address'];
				echo("$address");
				?>
				
			</td>
		</tr>
		<tr>
		<td> Phone: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$phone = $row['phone'];
				echo("$phone");
				?>
				
			</td>
		</tr>
		<tr>
		<td> License: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$license = $row['license'];
				echo("$license");
				?>
				
			</td>
		</tr>
		<tr>
		<td> Engine: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$engine = $row['engine'];
				echo("$engine");
				?>
				
			</td>
		</tr>
		
		<tr>
		<td> Mechanic: </td>
			<td>
			<?php
				$sql = "select * from info where license = '$license'";
				$result = mysqli_query($con,$sql);
				$row= $result->fetch_array();
				$mechanic = $row['mnumber'];
				echo("$mechanic");
				?>
				
			</td>
		</tr>
		<tr>
		<td> Date: </td>
			<td>
			<input type="date" name="updated_date" value="<?php
									 	$sql = "select * from info where license = '$license'";
										$result = mysqli_query($con,$sql);
										$row= $result->fetch_array();
										$data = $row['data'];
										echo("$data"); 						  
									  ?>">
			
			</td>
		</tr>
		<tr> 
		<td>
			<input type="submit" value="Change Mechanic">
			<button type="button"> <a href="view.php">Go Back</a> </button>
			</td>
		</tr>
		</table>
		
		
	</form>
	
	
</body>
</html>
<?php
require_once 'configure.php';
?>

<form action="list.php" method="post">
	<table>
		<tr>
			<td><b>Name</b></td>
			<td><b>Address</b></td>
			<td><b>Phone</b></td>
			<td><b>License</b></td>
			<td><b>Engine</b></td>
			<td><b>Date</b></td>
			<td><b>Mechanic</b></td>
			<td><b>Edit/Update</b></td>
		</tr>
		
	<?php
		$sql = "select * from info";
		$result = mysqli_query($con,$sql);
		
		while($row= $result->fetch_array()){
			echo("<tr>");
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['phone']}</td>";
			echo "<td>{$row['license']}</td>";
			echo "<td>{$row['engine']}</td>";
			echo "<td>{$row['data']}</td>";
			echo "<td>{$row['mnumber']}</td>";
			echo "<td><a href='edit_form.php?license={$row['license']}'>EDIT</a></td>";
                  
			
			echo("</tr>");
			
		}
		?>
	</table>
	
</form>
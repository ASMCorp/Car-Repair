<?php
require_once 'configure.php';
   if(isset($_POST['update'])){ 
      $total = count($_POST['name']); 
      $name_arr = $_POST['name']; 
      $address_arr = $_POST['address'];
	   $phone_arr = $_POST['phone'];
	   $license_arr = $_POST['license'];
	   $engine_arr = $_POST['engine'];
	   $data_arr = $_POST['data'];
	   $mnumber_arr = $_POST['mnumber'];
      for($i = 0; $i < $total; $i++){ 
         $name = $name_arr[$i]; 
         $address = $address_arr[$i];
		  $phone = $phone_arr[$i];
		  $license = $license_arr[$i];
		  $engine = $engine_arr[$i];
		  $data = $data_arr[$i];
		  $mnumber = $mnumber_arr[$i];
		  ///UPDATE `info` SET `name`=[value-1],`address`=[value-2],`phone`=[value-3],`license`=[value-4],`engine`=[value-5],`data`=[value-6],`mnumber`=[value-7]
         $query = "UPDATE info SET `mnumber`= '".$mnumber.", `data`= '".$data."' WHERE `name`= '".$name."' and `license`= '".$license.""; 
		  $res= mysqli_query($con,$query);
         
      } 
   }
?>
<?php
     include("connect.php");
	 header("location:admin_ambulance.php");
	 
$Ambulance=$_GET['rn'];
$query="DELETE FROM ambulance WHERE Ambulance='$Ambulance'";

$data=mysqli_query($conn,$query);

if($data)
{
	echo"Deleted";
}

else
{
	echo "Not Deleted";
}
?>
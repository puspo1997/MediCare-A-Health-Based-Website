<?php
     include("connect.php");
	 header("location:admin_bloodbank.php");
	 
$Name=$_GET['rm'];
$query="DELETE FROM bloodbank WHERE Name='$Name'";

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
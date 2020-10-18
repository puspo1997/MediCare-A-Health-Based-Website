<?php
     include("connect.php");
	 header("location:admin_diagnostic.php");
	 
$DiagnosticCenters=$_GET['rnn'];
$query="DELETE FROM dc WHERE DiagnosticCenters='$DiagnosticCenters'";

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
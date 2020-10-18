<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header("location:index.php");	
	}
	
	
?>
<?php
		include("connect.php");
		
?>

	<?php
	
		if(! mysqli_select_db($conn,'registration'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['register']))
			{
				$Name=trim($_REQUEST['Name']);
				$Age=trim($_REQUEST['Age']);
				$BloodGroup=trim($_REQUEST['BloodGroup']);
				$Contact=trim($_REQUEST['Contact']);
				
				
				
				$sql="INSERT  INTO bloodbank(Name,Age,BloodGroup,Contact)

					VALUES ('$Name','$Age','$BloodGroup','$Contact')";
				
				mysqli_query($conn,$sql);
				echo 'Registration Done!';
				
			}
	?>
<!DOCTYPE html>
<html>


<head>
 <title>Welcome to Admin Panel</title>
 <link rel="stylesheet" href="sylhet1.css"/>
<link rel="stylesheet" href="stylesheet.css"/>
	
 
 
 </head>
 
 

	<body>
		<div class="background">
		
			<div class="menu-bar">
				<ul>
						<li style="float: left; background-color: #4CAF50; "><a href="admin_bloodbank.php"> ADMIN PANEL </a></li>
				
				<li style="float: right; background-color: #4CAF50; "><a href="admin_logout.php"> LOGOUT </a></li>
				
				
				
			</ul>
				
			</div>			
		
		<!-- now start-->
		<div class="wrapper">
			<div class="sidebar">
				
				<ul>
		 			<li><a href="admin_bloodbank.php">Blood Bank</a></li>
		 			<li><a href="admin_doctor.php">Doctor</a></li>
		 			<li><a href="admin_diagnostic.php">Diagnostic </a></li>
					<li><a href="admin_ambulance.php">Ambulance </a></li>
					
					
					
					
		 		</ul>
			</div>
			
			<div class="about">
			<div class="main_content">
				<div class="info">	
				<div class ="aboutusbody">
			
			
			<form method="post" action="admin_bloodbank.php">

				<div class="input-group">
					<label>Name</label>
					<input type="text" name="Name">
				</div>
				
				<div class="input-group">
					<label>Age</label>
					<input type="text" name="Age">
				</div>	
					
				<div class="input-group">
					<label>BloodGroup</label>
					<input type="text" name="BloodGroup">
				</div>	
				
				<div class="input-group">
					<label>Contact</label>
					<input type="text" name="Contact">
				</div>	
			
				
			

				<div class="input-group">
					<button type="submit" name="register" class "btn">Insert</button>

				</div>	

			</form>
			<style>
						p{
							font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
							font-style: oblique;
							color:#006400;
							font-size:0.9em ;
							
						}
						table, th, td {
						border: 2px solid black;
						border-collapse: collapse;
						}
						th, td {
						padding: 5px;
						text-align: center;
						}
						table {
							border-spacing: 15px;
							width:600px;
						}
						
					</style>
						<?php
					
					$sql= "select * from bloodbank";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" color="white">';
		echo '<th>'.'Name'.'</th>';
		echo '<th>'.'Age'.'</th>';
		echo '<th>'.'BloodGroup'.'</th>';
		echo '<th>'.'Contact'.'</th>';
		echo '<th>'.'Delete'.'</th>';
		

		
		
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo "<tr>
		<td>".$arr['Name']."</td>
		<td>".$arr['Age']."</td>
		<td>".$arr['BloodGroup']."</td>
		<td>".$arr['Contact']."</td>
		
		<td><a href='delete3.php?rm=$arr[Name]'>Delete</td>
		
		
		</tr>";
	}
	echo '</table>';

					?>
			
			</div>
	
				
		 		</div>
				</div>
			</div> 
			  </div>	
			
</div>		
		</div>
		
		
			</div>
		
		

	</body>

 </html>


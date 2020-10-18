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
				$Ambulance=trim($_REQUEST['Ambulance']);
				$ContactNumbers=trim($_REQUEST['ContactNumbers']);
				
				$sql="INSERT  INTO ambulance(Ambulance,ContactNumbers)

					VALUES ('$Ambulance','$ContactNumbers')";
				
				mysqli_query($conn,$sql);
				
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
										<li><a href="admin_amb.php">Amb</a></li>
					
					
					
		 		</ul>
			</div>
				<div class="slider">
			<div class="aboutusbody">
			<p> Medicare Services Provides Sylhet Towns renowned Diagnostic Centers Information and Emergency Ambulance Contacts</p> 
					<style>
						p{
							font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
							font-style: oblique;
							color:#006400;
							font-size:0.9em ;
							
						}
						table, th, td {
						border: 2px solid white;
						border-collapse: collapse;
						}
						th, td {
						padding: 5px;
						text-align: center;
						}
						table {
							border-spacing: 15px;
							width:100%;
						}
						
					</style>

				<table>
				<tr><th>	
				<tr>
				<th>Contact</th>
				<th>Ambulance </th>
				
				</tr>
				
				
					
			</th>
			<th>
			<tr>
			<th>Contact</th>
			<th>Ambulance</th>
			<th>Delete</th>
			
			</tr>
			</th>
		</tr>
	</table>
		
		
</div></div>
			  </div>	
			
</div>		
		</div>
		
		
			</div>
		
		

	</body>

 </html>



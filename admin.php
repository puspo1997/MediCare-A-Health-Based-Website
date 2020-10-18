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
			
			<div class="register">
				
			
			</div>
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


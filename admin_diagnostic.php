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
				$DiagnosticCenters=trim($_REQUEST['DiagnosticCenters']);
				$Locations=trim($_REQUEST['Locations']);
				
				
				
				
				$sql="INSERT  INTO dc(DiagnosticCenters,Locations)

					VALUES ('$DiagnosticCenters','$Locations')";
				
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
			<form method="post" action="admin_diagnostic.php">

				<div class="input-group">
					<label>DiagnosticCenters</label>
					<input type="text" name="DiagnosticCenters">
				</div>
				
				<div class="input-group">
					<label>Locations</label>
					<input type="text" name="Locations">
				</div>	
					
				
			
				
			

				<div class="input-group">
					<button type="submit" name="register" class "btn">Insert</button>

				</div>	

			</form>
			<br>
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
							width:1000px;
						}
						
					</style>
			
			<?php
					
	$sql= "select * from dc";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" color="white">';
		echo '<th>'.'DiagnosticCenters'.'</th>';
		echo '<th>'.'Locations'.'</th>';
		echo '<th>'.'Delete'.'</th>';
		
		
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo "<tr>
		<td>".$arr['DiagnosticCenters']."</td>
		<td>".$arr['Locations']."</td>
		
		<td><a href='delete1.php?rnn=$arr[DiagnosticCenters]'>Delete</td>
		
		
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


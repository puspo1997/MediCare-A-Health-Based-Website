<?php
		include("connect.php");
		
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin & Jasmin Jahan Puspo">
	<title>Home</title>
	<link rel="stylesheet" href="stylesheet.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
		<div class="background">
			
			<div class="menu-bar">
			<ul>
			
			<li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
			<li><a href="about.php"><i class="fa fa-user" aria-hidden="true"></i>About Us</a></li>
			<li><a href="#"><i class="fa fa-clone" aria-hidden="true"></i>Services</a>
			<div class="sub-menu-1">
			<ul>
				<li class="hover-me"><a href="MediServices.php">MediServices</a><i class="fa fa-angle-right"></i></li>
				<li class="hover-me"><a href="doctor.php">Doctors</a><i class="fa fa-angle-right"></i></li>
				<li class="hover-me"><a href="pharmacy.php">Pharmacy</a><i class="fa fa-angle-right"></i></li>
				<li class="hover-me"><a href="health.php">Health Tips</a><i class="fa fa-angle-right"></i></li>			
			</ul>
			</div>
			</li>
			<li><a href="bloodbank.php"><i class="fa fa-medkit" aria-hidden="true"></i>Blood Bank</a></li>
			
			<li><a href="login.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>AdminLogin</a></li>
			
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
					<?php
					
					$sql= "select * from dc";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" >';
		echo '<th color="white">'.'Diagnostic Centers'.'</th>';
		echo '<th color="white">'.'Locations'.'</th>';
		
		
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['DiagnosticCenters'].'</td>';
		echo '<td>'.$arr['Locations'].'</td>';
		
		
		echo '</tr>';
	}
	echo '</table>';

					?>
				
			</th>

				<br>
				
			<th>
					<?php
					
					$sql= "select * from ambulance";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" color="white">';
		echo '<th>'.'Ambulance'.'</th>';
		echo '<th>'.'Contact Numbers'.'</th>';
		
		
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['Ambulance'].'</td>';
		echo '<td>'.$arr['ContactNumbers'].'</td>';
		
		
		echo '</tr>';
	}
	echo '</table>';

					?>

			</th>
		</tr>
	</table>
		
		
</div>
	
<footer class="footer">
			<p align="center">Copyright © all reserved here</p>
			
		</footer>		
</div>
		

			</div>

			
	
	
	</body>

</html>
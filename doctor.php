<?php
		include("connect.php");
?>



<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin">
	<title>Home</title>
	<link rel="stylesheet" href="stylesheet.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
	<php
		<div class="background">
			
			<div class="menu-bar">
			<ul>
			
			<li ><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
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
			
			<div class="aboutusbody">
				<div class="tablediv">
				<table>
				
						<style>
						
						h1{
							font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
							font-style: oblique;
							color: white;
							font-size:0.9em ;
							
						}
						table{
						border: 2px solid white;
						border-collapse: collapse;
						}
						th, td {
						border: 2px solid white;
						border-collapse: collapse;
						}
						th, td {
						padding: 5px;
						top:0;
						vertical-align:top;
						text-align: center;
						}
						table {
							border-spacing: 15px;
							width:100%;
						}
					</style>

					<table>
						<th bgcolor="#32CD32",width="100%" height="50px">
							<h1>“The aim of medicine is to prevent disease and prolong life; the ideal of medicine is to eliminate the need of a physician.”

—William J. Mayo</h1>
						</th>

					</table>
					
		<form method="post" action="">
			<input type="text" name="search" placeholder="Search By specialist">
			<button>Search</button>
		</form>			
		<?php
					
		if(isset($_REQUEST['search'])){
		$search=trim($_REQUEST['search']);
		$sql= "SELECT * FROM doctor WHERE Specialist LIKE '%$search%'";
		


	}else
					
	$sql= "select * from doctor";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" color="white">';
		echo '<th>'.'Name'.'</th>';
		echo '<th>'.'Specialist'.'</th>';
		echo '<th>'.'Chamber'.'</th>';
		echo '<th>'.'Time'.'</th>';
		echo '<th>'.'Days'.'</th>';
		echo '<th>'.'Fees'.'</th>';
		echo '<th>'.'Contact'.'</th>';
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['Name'].'</td>';
		echo '<td>'.$arr['Specialist'].'</td>';
		echo '<td>'.$arr['Chamber'].'</td>';
		echo '<td>'.$arr['Tim'].'</td>';
		echo '<td>'.$arr['Days'].'</td>';
		echo '<td>'.$arr['Fees'].'</td>';
		echo '<td>'.$arr['Contact'].'</td>';
		
		echo '</tr>';
	}
	echo '</table>';

					?>
					</table>
					
					
				</div>	
							
			</div>
			
			
		</div>
		<footer class="footer">
			<p align="center">Copyright © all reserved here</p>
			
		</footer>
	
	</body>

</html>
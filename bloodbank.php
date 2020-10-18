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
		<style type="text/css">
			p{
				font-family: "Lucida Console", Courier, monospace;
				color:rgb(0,100,0);
			}
		</style>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin & Jasmin Jahan Puspo">
	<title>Home</title>
	<link rel="stylesheet" href="stylesheet.css"/>
	<link rel="stylesheet" href="style.css"/>
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
			
			<div class="aboutusbody">
				<div class="tablediv">
				<table  >
					<style>
						table, th, td {
						border: 2px solid gray;
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
					<tr><th>
					<div class="bb">
				<h2>"Donate Your blood for a reason,let the reason to be life"</h2>
			
			</div>
			<form method="post" action="bloodbank.php">
				<p> You want to be a donor ? </p> <br>
				<p>Please Enter your Informations Below ...</p>


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
					<button type="submit" name="register" class "btnbb">Done</button>

				</div>	

			</form></th>

						<th><p>........Our Blood Donors Are Always Ready to donate blood.............</p><br>
						<table  >
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
						top:0;
						vertical-align:top;
						text-align: center;
						
						}
						table {
							border-spacing: 15px;
							width:100%;
						}
					</style>
					<form  method="post" action="bloodbank.php">
						<input type="text" name="search" placeholder="Search By BloodGroup" >
						<button>Search</button><br>
						
					</form>

	<?php
	if(isset($_REQUEST['search'])){
		$search=trim($_REQUEST['search']);
		$sql= "SELECT * FROM bloodbank WHERE BloodGroup LIKE '%$search%'";
		


	}
	else			
	$sql= "select * from bloodbank";
					
					
	$res=mysqli_query($conn,$sql);
	echo '<table border="1" width="100%" >';
	echo '<tr bgcolor="#006400" color="white">';
		echo '<th>'.'Name'.'</th>';
		echo '<th>'.'Age'.'</th>';
		echo '<th>'.'BloodGroup'.'</th>';
		echo '<th>'.'Contact'.'</th>';
		
		
	echo '</tr>';
	while($arr=mysqli_fetch_array($res))
	{
		echo '<tr>';
		echo '<td>'.$arr['Name'].'</td>';
		echo '<td>'.$arr['Age'].'</td>';
		echo '<td>'.$arr['BloodGroup'].'</td>';
		echo '<td>'.$arr['Contact'].'</td>';
		
		
		echo '</tr>';
	}
	echo '</table>';

					?>
					
					
				</table>
			</table>

				</div>
			
			</div>
			
			</div>
	
	</body>

</html>
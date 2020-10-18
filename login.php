<?php
	session_start();

	
?>
<?php
	include("connect.php");
?>
<?php
		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
		
		
		$sql = "select * from admin where username='$username' and password='$password'";
	    
		$run=mysqli_query($conn,$sql);
		$username_count=mysqli_num_rows($run);
		if($username_count){
			echo "login";
			$_SESSION['username']=$username;
			header ('location:admin.php');
					
		}else{
			echo "ohho";
			header ('location:login.php');
		}
			
		}
		
		?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Sadia Akter Afrin & Jasmin Jahan Puspo ">
	<title>Home</title>
	<link rel="stylesheet" href="stylesheet.css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>	
	
	
	<body>
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
			<div class="slider">
			<div class ="aboutusbody">
			<div class="register">
				<h2>Login</h2>
			
			</div>
			<form method="post" action="login.php">
				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username">
				</div>
				
				
					
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password">
				</div>	
				
				
				

				<div class="input-group">
					<button type="submit" name="login" class "btn">Login</button>
				</div>	
				

			</form>
				
			</div>
			<footer class="footer">
			<p align="center">Copyright © all reserved here</p>
			
		</footer>
			</div>
		
			
			
		</div>
		
	
	</body>

</html>
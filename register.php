
<!DOCTYPE html>
<html>
<?php
		include("connect.php");
	?>
	
	<?php
	
		if(! mysqli_select_db($conn,'registration'))
			echo 'Database not selected';
		
		if(isset($_REQUEST['register']))
			{
				$username=trim($_REQUEST['username']);
				$email=trim($_REQUEST['email']);
				$password_1=trim($_REQUEST['password_1']);
				
				
				$sql="INSERT  INTO users(username,email,password)

					VALUES ('$username','$email','$password_1')";
				
				mysqli_query($conn,$sql);
				echo 'Registration Done!';
			}
	?>
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
			
			<li><a href="login.php"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i>Login</a></li>
			<li><a href="register.php"><i class="fa fa-user-circle" aria-hidden="true"></i>Register</a></li>
			</ul>
			</div>
			<div class="slider">
			<div class="aboutusbody">
			<div class="register">
				<h2>Registration</h2>
			
			</div>
			<form method="post" action="register.php">

				<div class="input-group">
					<label>Username</label>
					<input type="text" name="username" required>
				</div>
				
				<div class="input-group">
					<label>Email</label>
					<input type="text" name="email" required>
				</div>	
					
				<div class="input-group">
					<label>Password</label>
					<input type="password" name="password_1" required>
				</div>	
				
				
			

				<div class="input-group">
					<button type="submit" name="register" class "btn">Register</button>

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
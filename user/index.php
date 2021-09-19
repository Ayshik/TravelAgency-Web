<?php 
	include('functions.php');

	if (!isLoggedIn()) {
		echo '<script>
alert("You must log in first")

</script>';


	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link   href="../css/styleb.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/user_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="index.php?logout='1'" style="color: red;">logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>



<header>
			<div class = "main">
				<ul>
					<!--<li ><a href="#">Home</a></li>
					<li><a href="#">About us</a></li>
					<li><a href="#">Tour Packages</a></li>
					<li><a href="#">Contact us</a></li>  -->
					
            <li class="current"><a href="home.php">Home</a></li>
			<li><a href="about.php">About us</a></li>
            <li><a href="tour.php">Tour Packages</a></li>
			<li><a href="contact.php">Contact us</a></li>
					
				</ul>	
			</div>	
			
				
			<div class ="button">
					<a href="logout.php" class="btn">Log out</a>
					
					
					
			
					
			
			<!-- <div class = "title">
				<h1>Tour Packages</h1>
				<h3>Custom your own tour packages</h3>
				
			</div> 


				
			<div class ="button">
					<a href="#" class="btn">Log out</a>
					
					
					
					
			</div>	 
				
			
			<div class ="button2">
					
					<a href="#" class="btn2">Package 1 3000Bdt 3 days 2 Night</a>
					<a href="#" class="btn2">Package 2 5000Bdt 5 days 3 Night</a>
					<a href="#" class="btn2">Package 3 2000Bdt 2 days 1 Night</a>
					<
					
					
					
			</div>	
			<div class ="button3">
					
					
					<a href="#" class="btn3">submit</a>
					
					
					
			</div>	
			
			-->
			
			
		</header>

</body>
</html>
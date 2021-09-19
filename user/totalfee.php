<?php

$totalfee = $pack1 = $pack2 = $pack3 = $pack4 = 0;

if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST['pack1'])){
        ;
      }
    else{
        $pack1 = $_POST['pack1'];
		$totalfee = $totalfee + $pack1; 
      }
	if(empty($_POST['pack2'])){
        ;
      }
    else{
        $pack2 = $_POST['pack2'];
		$totalfee = $totalfee + $pack2;
      }
	if(empty($_POST['pack3'])){
        ;
      }
    else{
        $pack3 = $_POST['pack3'];
		$totalfee = $totalfee + $pack3;
		
      }
	  if(empty($_POST['pack4'])){
		  
	  }
	  else{
		  $pack4 = $_POST['pack4'];
		  $totalfee = $totalfee + $pack4;
		  
		  
	  }
	  
}

?>



<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link   href="../css/styleb.css" rel="stylesheet" type="text/css">

	</head>

<body>
<header>
			<div class = "main">
				<ul>
					
					
					
            <li><a href="home.php">Home</a></li>
			<li><a href="about.php">About us</a></li>
            <li><a href="tour.php">Tour Packages</a></li>
			<li><a href="contact.php">Contact us</a></li>
		
					
				</ul>	
			</div>	
			<div class ="button">
					<a href="logout.php" class="btn">Log out</a>
					
			</div>

<form action="index.php" method="post">
	<label>Total Cost: </label>
	<label><?php echo $totalfee; ?></label>
	<input type="submit" name="accept" value="Accept">
	<input type="submit" name="reject" value="Reject">
</form>
</body>
</html>
<?php
require('Controller/packageControler.php');
$pack=getPackage();

?>


<html>
	   <head>
	<title>Tour Packages</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link   href="../css/styleb.css" rel="stylesheet" type="text/css">

	</head>


	<style>
body{
	background-color:white;
	padding:0px;

}
.card{
	border:1px solid black;
	width:300px;
	height:50px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
	border-radius: 5px;
	text-align: center;
	background-color:black;
	padding:5px;


}
#yah{
	width: 53%;
    margin: 179px auto;
    padding: 20px;

		background: transparent;
    border: coral;

	border-radius: 0px 0px 10px 10px;
}
.text{
	font-family:consolas;
	color:#ec8e8e;
}
.text-white{
	font-family:consolas;
	color:white;
}

.center{
	margin: 0 auto;
    width:50% ;
	padding:20px;


}
.header-index{
	position:relative;
	left:0;
	top:0;
	width: 100%;
	background-color: black;
	color: white;
	font-family:consolas;
	padding:5px;

}
.name{
	font-family:consolas;
	font-size:16px;
}

.card-product{
	display: inline-block;
	border:1px solid;
	width:200px;
	height:349px;
	margin-left:10px;
	margin-right:29px;
	margin-top:32px;
	border-radius: 15px;
	text-align: center;
	padding:5px;

}
.card-image{
	width: 201px;
	    height: 228px;
	    border-radius: 22px;
}
.card-text{
	text-align:center;

}
.price-label{
	width:185px;
	padding:3px;
	margin-left:2px;
	background-color:black;
	color:white;
	border-radius: 5px;
}
.center-index{
	margin: 0 auto;
    width:90% ;
	padding:20px;

}
.item-image{
	width:200px;
	height:250px;
	border-radius: 5px;
}
.center-login{
	position: absolute;
	left: 50%;
	top: 50%;
	-webkit-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	padding-left:100px;
	padding-right:100px;
	padding-bottom:10px;
	border:1px solid black;
	border-radius:10px;
	vertical-align:center;


}
.btn{
	font-family:consolas;
}
.ca {
	color: #fff;
	background-color: #5cb85c;
	border-color: #4cae4c;
	width: 172px;
	font-family: consolas;
	margin-top: 5px;
	display: inline-block;
	padding: 6px 8px;
	margin-bottom: 0;
	font-size: 14px;
	font-weight: 400;
	line-height: 1.42857143;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	-ms-touch-action: manipulation;
	touch-action: manipulation;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 4px;

}



           </style>

	<body>
	<header>
			<div class = "main">
				<ul>



            <li><a href="home.php">Home</a></li>
			<li><a href="about.php">About us</a></li>
            <li class="current" ><a href="tour.php">Tour Packages</a></li>
			<li><a href="contact.php">Contact us</a></li>


				</ul>
			</div>
			<div class ="button">
					<a href="logout.php" class="btn">Log out</a>

			</div>

		<form  id="yah" action="" method="post">
		  <?php
                foreach($pack as $product)
                {
              ?>
                <div class="card-product col-md-4">


                      <img class="card-image" src="<?php echo $product["pic"];?>"></img>
                      <b class="text"> <?php echo $product["placeName"];?></b><br>
                        <b class="text"> <?php echo $product["packageDet"];?></b><br>
                        <!--<b class="text"> <?php// echo $product["Address"];?></b><br>-->

                    <div class="price-label"><span ><b><?php echo $product["money"];?></b></span></div>

										<div class="ca"><a class="cb" href="<?php echo $product["placeName"];?>.php"style="width:185px;font-family:consolas;margin-top:5px;cursor: pointer;font-size: 20px;color:black;font-weight:bolder;">More</a></span></div>

                </div>

              <?php
                }
              ?>


	  </form>
	</body>
</html>

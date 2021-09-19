<?php
	include('../functions.php');
require('../Controller/Admincont.php');
$pack=getpackage();

	if (!isAdmin()) {
		$_SESSION['msg'] = "You must log in first";
		header('location: ../login.php');

	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Travel Agency</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->

    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

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
width: 190px;
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
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="dashboard.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </form>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $_SESSION['user']['username']; ?></b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.php" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                    <li>
                        <a href="basic-table.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Users</a>
                    </li>
                    <li>
                        <a href="pack.php" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>View Packages</a>
                    </li>
                    <li>
                        <a href="create_user.php" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Add Admin</a>
                    </li>
                    <li>
                        <a href="../Wreport.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Comments</a>

                    </li>
										<li>
												<a href="Activep.php" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Customers</a>
										</li>


                </ul>

            </div>

        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="../logout.php" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Logout</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
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

								 							 <div class="ca"><a class="cb" href="editpackage.php?uid=<?php echo $product["slNo"] ?>" style="width:185px;font-family:consolas;margin-top:5px;cursor: pointer;font-size: 20px;color:black;font-weight:bolder;">Edit</a></span></div>

								 					 </div>

								 				 <?php
								 					 }
								 				 ?>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <div class="row">

                </div>
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">

                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- .col -->

                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>

<?php
require_once'../Models/db_connect.php';



if(isset($_POST["update"]))
{
	updateadmin();
}
else if(isset($_POST["edit_product"]))
	{
		editProduct();
	}








Function getuser()
{
$query="SELECT * FROM users ";
$package=get($query);
return $package;

};
Function Fetchadmin()
{
	session_start();
	$var=$_SESSION['user']['username'];
$query="SELECT * FROM users where username='$var' ";
$package=get($query);
echo $query;
return $package[0];

}

Function updateadmin()
{
	session_start();
	$var=$_SESSION['user']['username'];
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];

$query="UPDATE users SET username='$name',email='$email',phoneno='$phone' WHERE username='$var'";
execute($query);
header("Location:../login.php");
}


Function getpackage()
{
$query="SELECT * FROM packages ";
$package=get($query);
return $package;

}

function getProduct($id)
	{
		$query="SELECT * FROM packages WHERE slNo='$id'";
		$product=get($query);
		return $product[0];
		echo $query;

	}

	function editProduct()
		{
			$target_file=$_POST["prev_image"];
			$id=$_POST["id"];
			$name=$_POST["name"];

			$price=$_POST["unit_price"];
			$qty=$_POST["unit_qty"];

			if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
			{
				$target_dir="../storage/product_image/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$target_dir2="../admin/storage/product_image/";
				$target_file2 = $target_dir2 . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
					move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
				//echo 'No upload';
			}
			//$query="UPDATE packages SET placeName='$name',packageDet='$price',money='$qty',pic='$target_file' WHERE slNo='$id'";
$query="UPDATE `packages` SET `placeName` = '$name', `packageDet` = '$price', `money` = '$qty', `pic` = '$target_file' WHERE `slNo` = $id";
			echo $query;
			execute($query);
header("Location:../admin/dashboard.php");
		}








	?>

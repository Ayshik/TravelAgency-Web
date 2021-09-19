
<?php
require_once ('../controller/Admincont.php');

$pid = $_GET["uid"];
$product=getProduct($pid);



?>


<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>

<!--editproduct starts -->
<div class="center">
<table>
	<td>
		<img class="item-image" style="margin-right:20px" src="<?php echo $product["pic"];?>"></img>
	</td>
	<td>
		<form method="post" action="../controller/Admincont.php" enctype="multipart/form-data" class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Place Name:</h4>
				<input type="text" name="name" value="<?php echo $product["placeName"]?>" class="form-control">
			</div>

			<div class="form-group">
				<h4 class="text">Package detals:</h4>
				<input type="text" name="unit_price" value="<?php echo $product["packageDet"]?>" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Cost:</h4>
				<input type="text" name="unit_qty" value="<?php echo $product["money"]?>" class="form-control">
			</div>

			<div class="form-group">
				<h4 class="text">Image</h4>
				<input type="file" name="image" class="form-control">
			</div>
			<input type="hidden" name="id" value="<?php echo $product["slNo"]?>" >
			<input type="hidden" name="prev_image" value="<?php echo $product["pic"]?>" >
			<div class="form-group text-center">

				<input type="submit" class="btn btn-success" name="edit_product" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>
</div>

<?php
require_once '../user/Models/db_connect.php';



if(isset($_POST["add_comments"]))
{
	Comments();
}




function Comments()
{


    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
		$conr=$_POST["country"];
    $comment=$_POST["comment"];


    $query="INSERT INTO `comments` (`Name`, `Division`, `Comment`) VALUES ('$fname $lname', '$conr', '$comment');";
        execute($query);
            echo $query;
header("Location:../user/contact.php");


  }

	Function getcomment()
	{
	$query="SELECT * FROM comments ";
	$package=get($query);
	return $package;

	};
	Function getcustomer()
	{
	$query="SELECT * FROM customers ";
	$package=get($query);
	return $package;

	};















?>

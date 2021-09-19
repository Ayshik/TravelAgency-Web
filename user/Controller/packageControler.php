<?php
require_once'Models/db_connect.php';



if(isset($_POST["add"]))
{
	insert();
}


function insert()
{
  session_start();
	$var=$_SESSION['user']['username'];




    $query="INSERT INTO `customers` (`UserName`, `Package`, `Paid`) VALUES ('$var', 'COX BAZAR', 'Yes')";
        execute($query);
            echo $query;



  }

Function getPackage()
{
$query="SELECT * FROM packages ";
$package=get($query);
return $package;

};


















?>

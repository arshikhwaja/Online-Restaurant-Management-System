<?php
session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");		
	}
$tbl_name = 'food';	
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$Id = $_GET['id'];
	$sql="DELETE FROM $tbl_name WHERE foodId='$Id'";
	$result=$conn->query($sql);
	if(!$result) die ($conn->error);
	$_SESSION['name']=$user;
	header("location:food.php");

?>

	
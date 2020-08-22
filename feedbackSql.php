<?php

session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");		
	}
$tbl_name = 'feedback';	
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$UserName = $_POST['fUserName'];
$EmailId=$_POST['fEmailId'];
$Rate= $_POST['fRate'];
$comments = $_POST['fComments'];

	$sql="INSERT INTO $tbl_name(username,email,rating,comment)
	VALUES ('$UserName','$EmailId','$Rate','$comments')";
	$result=$conn->query($sql);
	if(!$result) die ($conn->error);

	$_SESSION['name']=$user;
	header("location:index.php");

?>

	
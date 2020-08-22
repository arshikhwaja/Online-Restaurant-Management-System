<?php
session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login.php");		
	}
$tbl_name = 'orders';	
mysqli_select_db($conn,"$db_name") or die("cannot select db");

$userName = $_SESSION['name'];
$MyId=$_GET['id'];
$foodName= $_GET['VegName'];
$Myprice = $_GET['price'];
$Myquantity = $_GET['quantity'];
$date = date("Y-m-d");

	$sql="INSERT INTO $tbl_name(orderID,username,foodname,price,quantity,date)
	VALUES ('$MyId','$userName','$foodName','$Myprice','$Myquantity','$date')";
	$result=$conn->query($sql);
	if(!$result) die ($conn->error);

	$_SESSION['name']=$user;
	$_SESSION['name']=$userName;
	header("location:food.php");

?>

	
<?php
session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login1.php");		
	}
$tbl_name = 'food';	
mysqli_select_db($conn,"$db_name") or die("cannot select db");
$Id =$_POST['id'];
$Name=$_POST['name'];
$Price=$_POST['price'];
$Image =$_POST['image'];

$sql="UPDATE $tbl_name SET foodId='$Id',foodname='$Name',foodPrice='$Price',imgName='$Image' WHERE foodId='$Id'";	
	$result=$conn->query($sql);
	if(!$result) die ($conn->error);

	$_SESSION['name']=$user;
	header("location:index.php");

?>

	
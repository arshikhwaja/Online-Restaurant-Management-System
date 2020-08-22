<?php
session_start();
require('connection.php');
if(isset($_SESSION['name'])){}
	else{
		header("location:login.php");
	
	}
$tbl_name="register"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

$uname=$_POST['sUser'];
$mail=$_POST['sEmail'];
$pass=$_POST['sPass'];
$phn=$_POST['sPhone'];
$ads=$_POST['sads'];

$sql2="select * from $tbl_name";
$result2=mysqli_query($conn,$sql2);
$flag=0;
while($row=mysqli_fetch_array($result2)){
	if($row['username']==$uname){
		$flag=1;
		break;
	}
}
if($flag==1){
	$_SESSION['userExist'] = "true";
	header("location:signup.php");
	}
else{
	$sqlUser = "INSERT INTO $tbl_name(username,email,password,phone,address)VALUES ('$uname','$mail','$pass','$phn','$ads')";
	$result=mysqli_query($conn,$sqlUser);
	$_SESSION['name']=$uname;
	header("location:index.php");

}
?>
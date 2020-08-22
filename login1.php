<?php
session_start();

$uname=$_POST['uname'];
$pass=$_POST['upass'];

require('connection.php');

$tbl_name="register"; // Table name

mysqli_select_db($conn,"$db_name")or die("cannot select DB");


$sql="SELECT * FROM $tbl_name WHERE username='$uname' and password='$pass'";


$result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

if(mysqli_num_rows($result) < 1)
{
	//echo " .... LOGIN TRY  ....";
	$_SESSION['userExist'] = "false";
	header("location:login.php");
}
else
{
	if ($uname=="admin" && $pass=="Adm!n123") {
		header("location:admin/index.php");
	}
	else {
	$_SESSION['name'] = $uname; // Make it so the username can be called by $_SESSION['name']    //
	//echo " ....   LOGIN  ....";
	//echo $_SESSION['name'];
	header("location:index.php"); 
	}
}

?>

	
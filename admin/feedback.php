<?php
	session_start();
	
require('../connection.php');

	
$tbl_name="feedback"; // Table name

mysqli_select_db($conn,"$db_name") or die("cannot select db");

$result=mysqli_query($conn,"SELECT * FROM $tbl_name");

?>

<html>
<head>
<title>Feedback</title>
<style>
	.left{
		background-color:rgba(176, 58, 46 ,0.9) ;
		width:250px;
		height:1000px;
	}
	.right{
		background-color:rgba(236, 112, 99) ;
		width:1105px;
		height:1000px;
	}
	
	.heading{
		font-size:35px;
		font-family:'Times New Roman', Times, serif;
		color:white;
	}
	.subHeading{
		font-size:20px;
		font-family:'Times New Roman', Times, serif;
		color:white;
	}

	.topnav {
        overflow: hidden;
        background: rgba(236, 112, 99);
		border-radius: 40px;
    }
    .topnav a {
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		border-radius: 40px;
		text-decoration: none;
		font-size: 20px;
		box-shadow: #ddd;
		bgcolor:#CD6155;
    }
    .topnav a:hover {
		background-color:rgba(169, 50, 38 ,0.5) ;
		display:overflow;
		color: white;
		-ms-transform: scale(0.9);
		-webkit-transform: scale(0.9);
		transform: scale(0.9);
		transition: transform .2s;
		text-align: center;
    }
    .topnav .icon {
        display: none;
    }
    @media screen and (max-width: 600px) {
		.topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
        display: block;
        }
        }

    @media screen and (max-width: 600px) {
		.topnav.responsive 
        {position: relative;}
    .topnav.responsive .icon {
        position: absolute;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: center;
		background-color: #CD6155;
        }
   }
    .MenuBox{
        border-color: #F2F3F4; 
        background: transparent;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 25px;
		border-radius: 20px;
        cursor: pointer;
    }
	.Bar{
		background-color:rgba(176, 58, 46 ,0.5) ;
		width: 60%;
		height: 8%;
		margin-top: 5%;
		margin-left: 18%;
	}
	.Dashboard{
		background-color:rgba(176, 58, 46, 0.5);
		width: 70%;
		height: 80%;
		margin-top: 2%;
		margin-left: 15%;

	}
    
</style>
<title>Feedback</title>
</head>
<body>
<div style="margin:-8px">
<table>
	<tr>
	<td>
		<div style="margin:-8px">
			<table class="left">
			<tr>
				<td>
					<div style="margin-top:-60px">
						<span class="heading"><center>RestroGirls</center></span>
					</div>
					<br><br><br>
					<div class="topnav">
					<a href="food.php"><div class="MenuBox"><center>Cuisine</center></div></a>
					</div>
					<br><br>
					<div class="topnav">
					<a href="order.php"><div class="MenuBox"><center>Orders</center></div></a>
					</div>
					<br><br>
					<div class="topnav">
					<a href="feedback.php"><div class="MenuBox"><center>Feedback</center></div></a>
					</div>
				</td>
			<tr>
			</table>
		</div>
	</td>
	<td>
		<div style="margin-left:280px margin-top:-60px" class="right">
			<table style="float:right">
			<tr>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="index.php"><div class="MenuBox">Home</div></a>
					</div> 
				</td>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="../index.php"><div class="MenuBox">Main site</div></a>
					</div>
				</td>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="../about.php"><div class="MenuBox">About</div></a>
					</div>
				</td>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="../index.php"><div class="MenuBox">Logout</div></a>
					</div>
				</td>
			</tr>
			</table>
			<hr color="rgba(169, 50, 38, 0.9)" width="100%" height="0px">
			<div class="Dashboard">
				<font color="white" family="Times New Roman', Times, serif" size="7"><br><center>Feedback</center></font>
				<center><table width="40%">
				<table>
				<tr>
					<td>
						<br>
						<span class="subHeading" style="margin-left:-40%">Username</span>
					</td>
					<td>
						<br>
						<span class="subHeading" style="margin-left:90%">Ratings</span>
					</td>
					</td>
					<td>
						<br>
						<span class="subHeading" style="margin-left:50%">Comments</span>
					</td>		
				</tr>
				<?php				
				while($row=mysqli_fetch_array($result)){ ?>
				<tr style="color:#cf7549 max-width:100px;">			
					<td ><span class="subHeading" style="margin-left:-20%"><?php echo $row['username']; ?></span> </td>
					<td ><span class="subHeading" style="margin-left:115%;margin-right:20px"><?php echo $row['rating']; ?></span> </td>
					<td ><span class="subHeading" style="margin-left:150px"><?php echo $row['comment']; ?></span> </td>
				</tr>
				<?php
					}
				?>
				</table>
				</center>
				
			</div>
		</div>
	</td>
	</tr>
</table>
</div>
</body>
</html>
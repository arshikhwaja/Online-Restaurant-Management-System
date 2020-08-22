<?php
	session_start();
	
require('../connection.php');

	
$tbl_name="food"; // Table name

mysqli_select_db($conn,"$db_name") or die("cannot select db");

$result=mysqli_query($conn,"SELECT * FROM $tbl_name");

?>


<html>
<head>
<title>Add Food</title>
<style>

	.left{
		background-color:rgba(176, 58, 46 ,0.9) ;
		width:250px;
		height:750px;
	}
	.right{
		background-color:rgba(236, 112, 99) ;
		width:1105px;
		height:750px;
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
		margin: 50%;
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
		height: 70%;
		margin-top: 2%;
		margin-left: 15%;

	}
	.AddNew{
		 width:90px;
		 height: 40px;
		 margin-right:-40%;
		 background-color:rgba(236, 112, 99);
		 color: white;
		 cursor:pointer;
		 border:black;
         border-radius: 4px;
		 font-size: 17px;
		 font-family:'Times New Roman', Times, serif;
		 box-shadow: #ddd;
	}
	.add {
		width: 120%;
		height: 50px;
        background-color: rgb(19, 141, 117) ;
        color: white;
        padding: 7px 12px;
        border:black;
        border-radius: 4px;
        cursor:pointer;
		margin-left:700%;
		font-size: 22px;
		font-family:'Times New Roman', Times, serif;
    }
	.cancel {
		width: 70%;
		height: 50px;
		font-size: 22px;
		 font-family:'Times New Roman', Times, serif;
		 box-shadow: #ddd;
        background-color: rgb(19, 141, 117) ;
        color: white;
        padding: 7px 12px;
        border:black;
        border-radius: 4px;
        cursor:pointer;
		margin-left:300%;
    }
	input[type=text] {
    background: transparent;
    border: none;
    border-bottom: 2px solid #F1948A;
	}
	input:focus {
	  outline: 3px solid rgba(169, 50, 38 ,0.5);
	  border: none;
	}
	
</style>

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
						<a href="D:\php mp\home.php"><div class="MenuBox">Main site</div></a>
					</div>
				</td>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="D:\php mp\about.php"><div class="MenuBox">About</div></a>
					</div>
				</td>
				<td>
					<div class="topnav" style="margin-top:-2px">
						<a href="index.php"><div class="MenuBox">Logout</div></a>
					</div>
				</td>
			</tr>
			</table>
			<hr color="rgba(169, 50, 38, 0.9)" width="100%" height="0px">
			<div class="Dashboard">
				
				<span class="heading"><br><center>Add New Food</center></span>
				<br><br><br><br>
				<form name="AdFood" method="post" action="addFoodSql.php">
				<table style="max-width:100% max-height:100%;">
					<tr>
						<td>
							<span class="subHeading"style="margin-left:90%;">FoodID:</span>
						</td>
						<td>
							<input type="text" name="id" style="margin-left:60%;"/>
						</td>
						<td></td>
						<td>
							<span class="subHeading" style="margin-left:130%;">FoodName:</span>
						</td>
						<td>
							<input type="text" name="name" style="margin-left:100%;"/>
						</td>
					</tr>
					<br>
					<tr><td></td></tr><tr><td><br></td></tr><tr><td><br></td></tr>
					<tr>
						<td>
							<span class="subHeading"style="margin-left:90%;">Price:</span>
						</td>
						<td>
							<input type="text" name="price" style="margin-left:60%;"/>
						</td>
						<td></td>
						<td>
							<span class="subHeading" style="margin-left:130%;">ImageName:</span>
						</td>
						<td>
							<input type="text" name="image" style="margin-left:100%;"/>
						</td>
					</tr>
					<tr><td></td></tr><tr><td><br></td></tr><tr><td><br><br></td></tr>
					<tr>
					<td>
					<input type="submit" value="Add" class="add" onclick="add()"/>
					</td>
					<td>
					<a href="food.php"><input type="button" value="Cancel" class="cancel"></a>
					</td>
					</tr>
				</table>
				</form>
			</div>
		</div>
		<script>
		function add(){
		alert("Food Added successfully!");
		}
		</script>
</body>
</html>
<?php
session_start();
$tbl_name="register"; // Table name
require('connection.php');
mysqli_select_db($conn,"$db_name")or die("cannot select DB");
?>
<php>
<head>
<title>Home</title>

<style>
 * {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
                
#BlackTable{
    display: inline-flexbox;
    margin: 0px;
    background-color: rgba(236,112,99);
    font-family: 'Times New Roman', Times, serif;
    }
	#mydiv{
        background-color:rgba(26,26,26,0.9);
        }
    .mytable{
        background-color: white;
    }
    table.mytable{
        background-color: rgba(236,112,99);
    }
    .topnav {
        overflow: hidden;
        background: rgba(236, 112, 99);
    }
    .topnav a {
		float: right;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		border-radius: 40px;
		text-decoration: none;
		font-size: 17px;
		box-shadow: #ddd;
		bgcolor:#CD6155;
    }
    .topnav a:hover {
		background-color:#CD6155 ;
		display:overflow;
		color: white;
		-ms-transform: scale(0.9);
		-webkit-transform: scale(0.9);
		transform: scale(0.9);
		transition: transform .2s;
    }
	.mySlides {
		display:none;
        width: 100%;
        height: 70%;
    }
    .topnav .icon {
        display: none;
    }
    @media screen and (max-width: 600px) {
		.topnav a:not(:first-child) {display: none;}
        .topnav a.icon {
        float: left;
        display: block;
        }
        }

    @media screen and (max-width: 600px) {
		.topnav.responsive 
        {position: relative;}
    .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
    }
    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
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
        font-size: 18px;
		border-radius: 20px;
        cursor: pointer;
    }
                 
    .row {
        display: inline-block;
        float: right;
    }

    #mySearch {
        width: 100%;
        font-size: 18px;
        padding: 11px;
        border: 1px solid #ddd;
        float:left;
    }
    #myMenu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #myMenu li a {
        padding: 12px;
        text-decoration: none;
        color: black;
        display:block;
    }

    #myMenu li a:hover {
        background-color: #eee;
    }
	
    #mainselection {
        overflow: hidden;
        width: 240px;
        border-style: inset;
        border-width: 10px;
        -moz-border-radius: 9px;
        -webkit-border-radius: 9px;
        border-radius: 20px;
        box-shadow: 1px 1px 11px dimgray;
        background: #000;
        border: 10px;
    }

    #mainselection select {
        border-radius: 20px;
        color: #e2d5c0;
        background: transparent;
        border-width: 4px;
        border-style: inset;
        font-size: 20px;
        font-weight: bold;
        height: 40px;
        border-color: #666; 
        padding: 2px 10px;
        width: 240px;
        *width: 280px;
        *background: #111;
        -webkit-appearance: none;
    }

     #mainselection select option {
        background: transparent;
        background: #111;
        border-radius: 20px;
        color: #e2d5c0;
    }
    .backimg{
        width:50px;
        height: 50px;
        margin:0;
        background:url(\images\back.jpg) repeat;
    }
	.mydiv{
        padding-left: 0%;
        padding-right: 0%;
        padding-top: 0%;
        padding-bottom: 5%;
    }
	.heading{
		font-size:45px;
		font-family:Times New Roman Georgia;
		color:black;
	}
	.text{
		font-size:18px;
		font-family:Times New Roman Georgia;
		color:black;
		align:left;
	}
	.welcome{
		font-size:22px;
		font-family:Times New Roman Georgia;
		color:white;
		margin-left:12%;
		padding-top: -10%;
	}
	
</style>

</head>

<body>

         <div class="topnav">
         <font size="10" color="white" style="font-family:cursive">RestroGirls</font>
		 <span class="welcome">
		  <?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome, ".$_SESSION['name'];
			 }
			?>
		</span>
          <a href="login.php"><div class="MenuBox" >Login</div></a>
          <a href="signup.php"><div class="MenuBox" >Sign up</div></a>
          <a href="feedback.php"><div class="MenuBox">Feedback</div></a>
          <a href="food.php"><div class="MenuBox">Cuisine</div></a>
          <a href="about.php"><div class="MenuBox">About</div></a>
          <a href="#"><div class="MenuBox">Home</div></a>
		  
             </div>
          <div class="mydiv" style="max-width:1000px max-height:2000px">
            
            <img class="mySlides" src="images\south.jpg" style="width:100%"></img>
            <img class="mySlides" src="images\food.jpg" style="width:100%" ></img>
            <img class="mySlides" src="images\food2.jpg" style="width:100%"></img>
			<img class="mySlides" src="images\food4.jpg" style="width:100%"></img>
            <img class="mySlides" src="images\food3.jpg" style="width:100%"></img>
            <img class="mySlides" src="images\food5.jpg" style="width:100%"></img>
         
          </div>
		    <span class="heading"><center>Restaurant Powered by Girls</center></span>
		  <table>
		  <tr>
		  <td>
		
<center><span class="text">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Restro Girls is a online restaurant management website that aims to deliver quality food<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at your door step. We provide variety of cuisine for you. Right from North Indian food<br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to South Indian food we have every kind of cuisine available. Apart from indian cuisine <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;we also provide some chinese, moghlai and other types of food. We also have fast food that<br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;includes momos, pizzas, sandwiches, burgers and what not! to light up your mood We whole <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;heartedly welcome our customers and love to provide excellent quality food. We have free <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;home delivery available."Nothing brings people together like good food!" and we assure to <br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deliver good food. So don't wait and place your order!!<br> 

</span>
</center>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images\girl.jpg"></img></td></tr>
		  </table>
         
                     <table width="100%" cellspacing="45" cellpadding="9" id="BlackTable">
              <tr>
                <td>
                  <font color="#FBFCFC" size="4"><b>About RestroGirls</b></font><br><br>
                  <font color="#F7F9F9 ">Restro Girls is an online restaurant management <br>website where you get tasty meals served within <br>short time. We provide sit and dine as well as free <br> home delivery. Visit our restaurant with your <br>family and friends</font> 
                  
                </td>
                <td>
             <font color="#FBFCFC" size="4"><b>Contact Us</b></font><br><br>
             <font color="#F7F9F9 ">Call us toll free:</font><br><br>
              <font color="#F7F9F9 " size="6"> 1 8 0 0 3 8 2 9 1 6 </font>
                </td>
                <td>
                   <font color="#FBFCFC" size="4"><b>Quick Links</b></font><br><br>
                    <a href="index.php"><font color="#F7F9F9 ">Home</a><br>
                    <a href="about.php"><font color="#F7F9F9 ">About Us</a><br>
                    <a href="food.php"><font color="#F7F9F9 ">Foodie</a><br>
                    <a href="feedback.php"><font color="#F7F9F9 ">Feedback</a><br>
                </td><td></td>
                <td>
                    <font color="#FBFCFC" size="4"><b>Follow us on:<br></font><br><br>
                    <a href="https://www.instagram.com/arshi_khwaja_/" target="_blank" bgcolor="#F7F9F9 "><img src="images\instagram.png" width="30px" height="30px" ></a>&nbsp&nbsp
                    <a href="https://in.pinterest.com/ansariraheen26/" target="_blank" bgcolor="#F7F9F9"><img src="images\pinterest.png" width="30px" height="30px" ></a>&nbsp&nbsp
                    <a href="https://www.facebook.com/ETAMovie/" target="_blank" bgcolor="#F7F9F9 "><img src="images\facebook.png" width="30px" height="30px" ></a>&nbsp&nbsp
                   
                    <br><br>
                   <font color="#FBFCFC" size="4"><b>RestroGirls<br></font><br>
                    <font color="#F7F9F9 ">Made in India with love</font><br><br>
                   </td>  
              </table>
              <table bgcolor="#CD6155 " height="70px" width="100%">
                <tr>
                </tr>
                 <tr>
                   <td>

                   </td>
                      <td>
                    <center><font color="white" size="4">&copy;RestroGirls 2020.All Rights Reserved</font></center>
                      </td>
                  </tr>
                  <tr>

                  </tr>
                </table>
                <script>
				     var si = 0;
					food();
					function food() {
					  var i;
					  var x = document.getElementsByClassName("mySlides");
					  for (i = 0; i < x.length; i++) {
						x[i].style.display = "none";
					  }
					  si++;
					  if (si > x.length) {si = 1;}
					  x[si-1].style.display = "block";
					  setTimeout(food, 2000); // Change image every 2 seconds
					}

                    </script>
     </body>
</html>


<?php

if(isset($_SESSION['error'])){
session_destroy();
}

?>


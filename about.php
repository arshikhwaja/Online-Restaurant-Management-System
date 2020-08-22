<?php
session_start();
$checkName="";
?>
<html>
    <head>
                
        <title>About us</title>
        <style>
          * {box-sizing: border-box}
                    body {font-family: Verdana, sans-serif; margin:0; overflow-x: hidden}
            
            .mySlides {
            display:none;
            width: 100%;
            height: 100%;
            }
			.feature1{
			 padding-left: 16%;
			}
			.feature2{
			 padding-left: 13%;
			}
			
            img.about{
                height: 80%;
                width:80%;
                box-shadow: 5px 5px 5px grey;
            }
        .mydiv{
			padding-left: 0%;
			padding-right: 0%;
			padding-top: 0%;
			padding-bottom: 5%;
		}
		    b{
                color: orange;
            }
            body{
                font-size: 220%;
                font-family:Verdana, Geneva, Tahoma, sans-serif;
                
            }
            #BlackTable{
    display: inline-flexbox;
    margin: 0px;
    background-color: rgba(236,112,99);
    font-family: 'Times New Roman', Times, serif;
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
        height: 80%;
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
    
                  .newdiv{
                      width:70%;
                      height:1%,1%;
                      padding-left: 5%;
                      font-family:;
                      font-size: 20pt;

                  }
                 
                 input[type=text], textarea {
                    width: 600px;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 1px;
                    box-sizing: border-box;
                    margin-top: 6px;
                    margin-bottom: 16px;
                    resize: vertical;
                 }      
                 button{
                    background-color: rgb(221, 123, 10);
                    color: white;
                    padding: 12px 18px;
                    border:black;
                    border-radius: 4px;
                    cursor:pointer;
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
          <a href="index.php"><div class="MenuBox">Home</div></a>
        </div>
       
		 <div class="mydiv" style="max-width:1000px max-height:2000px">
            
            <img class="mySlides" src="images\entrance.jpg" style="width:100%"></img>
            <img class="mySlides" src="images\tables.jpg" style="width:100%" ></img>
            <img class="mySlides" src="images\family.jpg" style="width:100%"></img>
			<img class="mySlides" src="images\kitchen.jpg" style="width:100%"></img>
            <img class="mySlides" src="images\washroom.jpg" style="width:100%"></img>
                    
		</div>
		<div>
		    <span class="heading"><center>ABOUT US</center></span><br>
		 <center><span class="text">
We have developed a restaurant management website named "Restro Girls". Here we offer good quality and qauntity food for our customers<br>
within few duration of time. Here you will get your favourite food be it light food or fast food we have everything available  at our restaurant.<br> 
For desserts wehave tasty ice-creams, brownies, waffles and variety of sweets and many more....We provide free home delivery. We also have<br>
sit and dine facility available. We have expert chefs with 10+ years of experience. Apart from chefs,we have a managing team of 30-40 people.<br>
We are located at the prime spot of South Mumbai, near Saboo Siddik Polytechnic College. Our timing is from 8:00am morning to 12:00am<br>
night. Our moto is to serve tasty food in less time and to send customers home with satisfaction and happy mood.<br><br>
				</span>
		</center>
		</div>
		<br><br>
		<div> 
		<img  class="feature1" src="images\variety.png"></img> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<img src="images\truck.png"></img> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;<img   src="images\smile.png"></img>
		
		<br>
		<span class="feature2" style="font-size:20">Variety of Dishes</span>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-size:20">Free Home Delivery</span>&nbsp;&nbsp;&nbsp;<span class="feature2" style="font-size:20">Excellent Quality</span>
		</div>
        <br><br>    
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
            
                var myIndex = 0;
                about();
                
                function about() {
                  var i;
                  var x = document.getElementsByClassName("mySlides");
                  for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                  }
                  myIndex++;
                  if (myIndex > x.length) {myIndex = 1}    
                  x[myIndex-1].style.display = "block";  
                  setTimeout(about, 2000); // Change image every 2 seconds
                }             
              </script>
         
    </body>
</html>
<?php

if(isset($_SESSION['error'])){
session_destroy();
}

?>
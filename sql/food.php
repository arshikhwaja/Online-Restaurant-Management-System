<?php

session_start();
if(isset($_SESSION['name'])){}
	else{
		header("location:login.php");
  }
  require('connection.php');
  $tbl_name = 'food';	
  mysqli_select_db($conn,"$db_name") or die("cannot select db");
  $sql="SELECT * FROM $tbl_name";
  $result=mysqli_query($conn,$sql) or trigger_error(mysql_error.$sql);

  $n=0;
?> 

<html>
    <head>
      <title>Foods</title>
        
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                    * {box-sizing: border-box}
                    body {font-family: Verdana, sans-serif; margin:0}
                
                    #BlackTable{
                      display: inline-flexbox;
                      margin: 0px;
                     background-color: rgba(236,112,99);
                      font-family: 'Times New Roman', Times, serif;
                     }
                    hr{
                      background-color:rgba(26,26,26,0.9);
                      
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

                  #mySearch 
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






            /*LOGIN AND SIGNUP */

            /*Full-width input fields */

            input[type=text], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0px 22px 0;
            background: #f1f1f1;
            }

            /* Set a style for all buttons */

            button {
            background-color: orange;
            padding: 14px 20px;
            width: 20%;
            }

            /* Extra styles for the cancel button */

            .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
            border: 5px solid darkgray;
            }
            .signupbtn,.logbtn{
            padding: 14px 20px;
            background-color: green;
            border: 5px solid darkgray;
            }

            .signupbtn:hover {
                background-color: lightgreen;
            }

            .logbtn:hover {
                background-color: lightgreen;
            }

            .cancelbtn:hover {
                background-color: lightred;
            }
            /* Float cancel and signup buttons and add an equal width */
            .cancelbtn, .signupbtn,.logbtn {
            float: left;
            width: 50%;
            }

            /* Add padding to container elements */
            .container {
            padding: 16px;
            background-color: rgba(26,26,26,0.4);
            border-radius: 30px;
            
            }

            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            /*overflow: auto; Enable scroll if needed */
            background-color: rgba(26, 26, 26, 0.5);
            padding-top: 0%;
            /*border: 5px solid darkgray;*/
            
            }

            /* Style the horizontal ruler */
            hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
            }

            .container input {
                border: 1px solid gray;
            }

            .modal-content {
            background-color: white;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 30%; /* Could be more or less, depending on screen size */
            border-radius: 30px;
            border-style: outset;
            border-color:5px solid gray;
            
            }

            /* Clear floats */
            .clearfix::after {
            content: "";
            clear: both;
            display: table;
            }
            .close-signup {
                display: inline-block;
                float: right;
                font-size: 20px;
                cursor: pointer;
            }
            .close-signup:hover {
                color: red;
            }

            .container h1 {
                margin : 0%;
                display: inline-block;
            }


            /* Foods */

            .main-div{
                      margin-left: 200px;
                      padding-top: 50px;
					  padding-bottom: 50px;
                      max-width: 2000px; 
                  }
                
                 h4 {
                   color: black;
                  }
                
                  
                  .i{
                    width: 100%;
                    height: 55%;
                    border: 2px solid #CD6155;
                    opacity: 1;
                    display: block;
                    
                  }

                  .single{
                    width: 300px;
                    height: 65%;
                    padding: 15px;
                    float: left;
                    margin: 5px;
                    position: relative;
                   
                  }
                  
                  .single:hover .middle {
                  opacity: 1;
                  }

                  div.single:hover {
                    border: 1px solid #777;
                  }
                  i:hover{
                    color: lightgray;
                  }
                  
                  .MenBox{
                    background-color: #CD6155;                   
                    border-style: outset;
                    border-color: #666; 
                    
                    color: white;
                    padding: 10px 10px;
                    text-align: center;
                    
                    display: block;
                    font-size: 18px;
                    margin: 4px 2px;
                    border-radius: 20px;
                    cursor: pointer;
                    widows: 5px;

                  }
                  .MenBox:hover{
                    background-color: rgb(206, 79, 65);
                  }
                  .font1{
                    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                  }
                  .checked {
                    color: orange;
                  }
				  .welcome{
		font-size:22px;
		font-family:Times New Roman Georgia;
		color:white;
		margin-left:12%;
		padding-top: -10%;
	}

                
                  </style>  
<title>Food</title>				  
    </head>
   <body>
	<script>
	 function validate(id){
		 var q = document.getElementById(id).value;
		 if (q>0 && q<=10) {
				alert("Ordered Successfully!");
				return true;
			 }
		else if(q>10){
			alert("This much qauntity is currenty unavailable, Sorry :(");
			return false;	
		}	
		else{
			alert("Enter quantity");
			return false;
		}
	 }
	 
	</script>
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
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div>
		<div>
		</div>

        <div class="main-div">
        <?php
				$n=0;
				while($row=mysqli_fetch_array($result)){
					
				?>
                <div class="single">
                <form name="food" action="order.php">
                    <img src="images\<?php echo $row['imgName']?>.jpg" class="i" alt>                
                <h2 >
                    <?php echo $row['foodname']?>
                </h2>
               <input type="hidden" value="<?php echo $row['foodname']?>" name="VegName"/>
               <input type="hidden" value="<?php echo $row['foodPrice']?>" name="price"/>
               <p  class="font1" style="margin-top:-10px;">&nbsp;&nbsp;&nbsp;<?php echo $row['foodPrice']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span></p>

                <label style="margin-left:10px; margin-top:-100px">Quantity</label>
                <input type="text" name="quantity" id="qty<?php echo $n; ?>" size="" style="width:50%;height:2px;float:right;margin-top:-10px;"><br>
				
               
               <center><input type="submit" class="MenBox" value="Order Now" onclick='return validate("qty<?php echo $n; ?>")' style="margin-top:-5px;color:black;font-weight:bold;width:90%;"/></center>
               <input type="hidden" name="id" value=<?php echo $row['foodId']?>>
               </form>
            </div>

          <?php
				$n++;
					}
				?>           

        </div>
                     <table width="100%" cellspacing="45" cellpadding="9" id="BlackTable">
              <tr>
                <td>
                  <font color="#fffbef" size="4"><b>About RestroGirls</b></font><br><br>
                  <font color="#F7F9F9 ">Restro Girls is an online restaurant management <br>website where you get tasty meals served within <br>short time. We provide sit and dine as well as free <br> home delivery. Visit our restaurant with your <br>family and friends</font> 
                  
                </td>
                <td>
             <font color="#fffbef" size="4"><b>Contact Us</b></font><br><br>
             <font color="#F7F9F9 ">Call us toll free:</font><br><br>
              <font color="#F7F9F9 " size="6"> 1 8 0 0 3 8 2 9 1 6 </font>
                </td>
                <td>
                   <font color="#fffbef" size="4"><b>Quick Links</b></font><br><br>
                    <a href="index.php"><font color="#F7F9F9 ">Home</a><br>
                    <a href="about.php"><font color="#F7F9F9 ">About Us</a><br>
                    <a href="food.php"><font color="#F7F9F9 ">Foodie</a><br>
                    <a href="feedback.php"><font color="#F7F9F9 ">Feedback</a><br>
                </td><td></td>
                <td>
                    <font color="#fffbef" size="4"><b>Follow us on:<br></font><br><br>
                    <a href="https://www.instagram.com/arshi_khwaja_/" target="_blank" bgcolor="#F7F9F9 "><img src="images\instagram.png" width="30px" height="30px" ></a>&nbsp&nbsp
                    <a href="https://in.pinterest.com/ansariraheen26/" target="_blank" bgcolor="#F7F9F9"><img src="images\pinterest.png" width="30px" height="30px" ></a>&nbsp&nbsp
                    <a href="https://www.facebook.com/ETAMovie/" target="_blank" bgcolor="#F7F9F9 "><img src="images\facebook.png" width="30px" height="30px" ></a>&nbsp&nbsp
                   
                    <br><br>
                   <font color="#fffbef" size="4"><b>RestroGirls<br></font><br>
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
                
    </body>

</html>
<?php

if(isset($_SESSION['error'])){
session_destroy();
}

?>
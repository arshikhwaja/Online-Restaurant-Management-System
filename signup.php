<?php
session_start();
$checkName="";
?>
<html>
    <head>
      <title>Signup</title>
        
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
					 #sign{
						 height: 120%;
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


                .backimg1{
                    height: 100%;
                    width: 100%;
                    background-image: url("D:\php mp\images\food2.jpg");
                    
                }
            
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
			height: 100%;
            
            }

            /* The Modal (background) */
            

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
                
                  </style>
                    
    </head>
<body style="background-image:url(images/food5.jpg)" >

        <div class="topnav">
         <font size="10" color="white" style="font-family:cursive">RestroGirls</font>
		 
         <a href="login.php"><div class="MenuBox">Login</div></a>
         <a href="signup.php"><div class="MenuBox">Sign Up</div></a>
          <a href="feedback.php"><div class="MenuBox">Feedback</div></a>
          <a href="food.php"><div class="MenuBox">Cuisine</div></a>
          <a href="about.php"><div class="MenuBox">About</div></a>
          <a href="index.php"><div class="MenuBox">Home</div></a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
        </div> 
      
    
        <div id="sign">
            <form name="signup"  action="register.php" method="Post" class="modal-content" >
              <div class="container">
                <h1>Sign Up</h1>
               
              
                <hr>

                <center><input type="button" id="wrong" value="User already Exists!!" style="visibility:hidden;background-color:red;color:white;width:80%;height:40px;"></center>

                <label for="Name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" id="fname" name="sUser" onblur="validateFirstName()" onfocus="clear()"><span id="fn"></span>
          
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="sEmail" id="eid" onblur="validateEmailId()" onfocus="clear()"><span id="email"></span>
			<br>
                <label for="psw"><b>Password </b></label>
                <input type="password" placeholder="Enter Password" size="8" id="psd" name="sPass" onblur="validatePassword()" onfocus="clear()"><span id="ps"></span>
          <br>
                <label for="cpass"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" size="8" id="cpsd" onblur="confirmPassword()" onfocus="clear()"><span id="cps"></span>
				<br>
                <label for="phone No."><b>Phone No</b></label>
                <input type="text" placeholder="Enter Phone No." name="sPhone" id="mob" size="10" onblur="validateMobileNum()" onfocus="clear()"><span id="mn"></span>
          <br>
				<label for="phone No."><b>Address</b></label><br>
                <textarea placeholder="Enter address" rows="5" cols="50" name="sads" id="ads" size="10" onblur="validateAddress()" onfocus="clear()"></textarea><span id="ad"></span>
				<br>
                <div class="clearfix">
                <a href="index.php"><input type="button" value="Cancel" class="cancelbtn" /></a>
                  <input type="submit" class="logbtn" value="Login"><br> 
                </div>

              </div>
				

            </form>


        </div>
 
   
<br><br><br><br>

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



                <script type="text/javascript">
				
					function validateFirstName() {
					var fname = document.getElementById('fname').value;
					var regex = /^[a-zA-Z]{1,}$/;
					if(regex.test(fname)==true) {
						document.getElementById("fn").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("fn").innerHTML="<br/><font color=red>Cannot start with digits or special character</font>";
						return false;
					}
				}
				
				
				function validateEmailId() {
					var email = document.getElementById('eid').value;
					var regex = /^[a-zA-Z][0-9a-zA-Z_.]{1,}[@][a-z]{1,}(\.com|\.in|\.org|\.co\.in|\.org\.in)$/
					if(regex.test(email)==true) {
						document.getElementById("email").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("email").innerHTML="<br/><font color=red>Please Enter a correct Email ID <br>(must include @)</font>";
						return false;
					}
				}
				
				function validatePassword() {
					var pass = document.getElementById('psd').value;
					var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@._!#$^&*]).{8,}$/
					if(regex.test(pass)==true) {
						document.getElementById("ps").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("ps").innerHTML="<br/><font color=red>Password must contains <br>(digits,lowerAlph,UpperAlpha,Special char)</font>";
						return false;
					}
				}
			
				
				function confirmPassword() {
					var pass = document.getElementById('psd').value;
					var cpass = document.getElementById('cpsd').value;
					
					if(cpass==pass) {
						document.getElementById("cps").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("cps").innerHTML="<br/><font color=red>Password Didn't match</font>";
						return false;
					}
				}

				
				function validateMobileNum() {
					var num = document.getElementById('mob').value;
					if(num.length==10) {
						document.getElementById("mn").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("mn").innerHTML="<br/><font color=red>Number length must be 10 digits</font>";
						return false;
					}
				}
				
				function validateAddress() {
					var fname = document.getElementById('ads').value;
					var regex = /^[a-zA-Z0-9]{1,}$/;
					if(regex.test(fname)==true) {
						document.getElementById("ad").innerHTML="";
						return true;
                    }
					else
					{
						document.getElementById("ad").innerHTML="<br/><font color=red>Enter address in proper format</font>";
						return false;
					}
				}
				
	


	</script>
              
    </body>

</html>
<?php
if(isset($_SESSION['userExist']))
{
if($_SESSION['userExist']=="true")
echo "<script>document.getElementById(\"wrong\").style.visibility=\"\";</script>";
session_destroy();
}
?>
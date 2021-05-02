



<!DOCTYPE html>
<html>
<head>
	<title>SL Trainline</title>
	<link rel="stylesheet" type="text/css" href="style/registration.css"> 
	
	<style>
	.img{
	background-image: url(images/hitachi-4.jpg);
	height: 1000px;
	width: 100%;
	margin-top:-150px;
	padding-top: 10px;
	padding-bottom: 60px;
	background-size: cover;
	-webkit-background-size: cover;
	background-attachment: fixed;

}


.site-search{
	padding:5px 25px;	
	margin-top: 10px;
	margin-right: 65px;
	float:right;
	background: white;
	border-radius: 25px;
	box-shadow: 5px solid black;

}
.site-search input{
	width: 250px;
	border:0;
	float: left;
	background: white;

}
.site-search button{


	width: 18px;
	height: 18px;
	background: url(../img/search.png);
	border: 0;
	float: right;
}
.top-img{

	background-size: cover;
	margin-top: -6px;
	margin-right: -2px;

}

.nav-bar{
margin-top:-1060px;
  background: linear-gradient(to bottom left, #0000ff -8%, #ffffff 56%);
padding-right: 3px;
width:100%;
height: 110px;
max-width: 1500px;
min-width: 1500px;
margin-bottom: 250px;
box-shadow: 2px 2px 10px black;

}
.nav-bar img{
	margin-top: 20px;
	margin-left: 30px;
		box-shadow: 2px 2px 10px black;
}

.nav-bar-links{

	float: right;
}
.nav-bar-links ul{
margin-top: -30px;
margin-right: 60px;
}
.nav-bar-links ul li{
	border-radius: 5px;
	border: 8px 8px 8px 8px;
	display: inline-block;
	padding: 5px 5px 5px 5px;
	margin-left: 10px;
	margin-right: 10px;
	border-right: 1px solid white;
	margin-bottom: 10px;



}
.nav-bar-links ul li:first-child{
	background: blue;

}
.nav-bar-links ul li a:hover{
color: white;

}
.nav-bar-links ul li:hover{
	background: blue;

}
.nav-bar-links ul li a{

	text-transform: uppercase;
	font-size: 16px;
	margin-right: 10px;
	font-weight: bold;
	letter-spacing: 1px;
	color: black;
}
.top-bar img{

	margin-top: 15px;
	margin-left: 50px;
	float: left;
	border-radius: 4px;
	position: relative;
}





.footer{

	width: 100%;
	padding: 100px 0px;
	height: 200px;
   background: linear-gradient(to bottom right, #999966 41%, #ffffff 86%);
}




.top-footer{


	width: 20%;
}
.footer-text1{
	margin-left: 60px;
	width: 100%;
	
}
.footer-text1 h1{
	font-size: 22px;
	font-weight: bold;
	color: white;
	font-style: italic;
text-align: center;
}
.footer-text1 p{
float: left;
margin-top: 20px;
margin-left: 40px;
	color: white;
}

.social-icons{
	margin-left: 20px;
	width: 100%;

}
.social-icons ul{
	margin: 0;
	padding: 0;
	float: right;

}
.social-icons ul li{
	display: inline-block;

	margin: 0px 5px;
	border-radius: 100%;



}
.social-icons img{
	margin-bottom: -50px;
}
.top-footer2{
	margin-top: -200px;
	float: right;
	width: 40%;

}

.contact{
	margin-left: -300px;
	width:100%; 
}
.contact h1{
	width:100%; 
margin-left: 40px;
		font-size: 22px;
	font-weight: bold;
	color: white;
	font-style: italic;
}
.contact-icons{
margin-left: -300px;
	margin-top: 50px;
}
.contact-icons img{
	float: left;
 	margin-right: 40px;
 	margin-top: -15px;
}
.text-footer a{
margin-left: -220px;
color: white;

}
.text-footer p{
	margin-top: 30px;
margin-left: -220px;
color: white;


}
.logo{
	margin-top: -100px;
	margin-left: 600px;
	float: right;
}
#text-logo{
	float: left;
	margin-top: -100px;
}
#pic-logo{
	
	margin-right: 5px;
	
}
#location{
	float: left;
	margin-top: 50px;
	margin-left: -80px;
}
.footer-buttom{

	width: 100%;
	height: auto;
	margin: auto;
	background-color: black;
	padding-top: 5px;
	margin-bottom: 5px;

}
.footer-buttom p{
	font-family: arial;
	font-size: 14px;
	text-align: center;
	color: white;




	body {
	font-family: Arial, Helvetica, sans-serif;
	color: #f0f7f2;
	}

</style>


</head>
<body>
	<div class="wrapper">
		<div class="application">
		<div class="top-img">

<div class="img">




</div>



<div class="nav-bar">





			<img src="img/logo/Unt.png">



<div class="site-search">
	
	<form action="index.html" method="get">
		
		<input type="search" name="search-box" placeholder="search..">
			<button type="submit"></button>

	</form>
</div><!-- site-search -->

				
		<div class="nav-bar-links">
						
				<ul>
					<li><a href="index.html">home</a></li>

					<li><a href="Registration.php">Register</a></li>
					<li><a href="pro.php">Log In</a></li>
					 <li><a href="Shedule.php">Shedule</a></li>
					<li><a href="contact-us.php">contact us</a></li>
				    <li><a href="About us.html">About us</a></li>


				</ul>


		</div><!--nav-bar-links-->

</div><!--nav-bar-->


<!-----------------------------END ------Navigaion ---------bar-------------------------->


	<div class="img">
		<div class="apllication-form">
	<form method="POST" action="Registration connection.php">
	
		<div class="reg" >
			<h1>Create an Account</h1>
			
			<p>Please fill in this form to create an account.</p>
			
			<hr>
			<dv class="fname">
			<label><b>First Name</b></label>
			<input type="text" placeholder="First Name" name="fname" required>
			</dv>
			<br><br>
			<dv class="lanme">
			<label><b>Last Name</b></label>
			<input type="text" placeholder="Last Name" name="lname" required>
			</dv>
			<br><br>
			
			<dv class="email">
			<label><b>Email</b></label>
			<input type="text" placeholder="Enter Email" name="email" required>
			</dv>
			<br><br>
			
			<dv class="pwd">
			<label><b>Password</b></label>
			<input id="psswrd" type="password" placeholder="Enter Password" name="psw" required>
			</dv>
			<br><br>
			
			<dv class="rpwd">
			<label><b>Repeat</b></label>
			<input type="password" id="repsswrd" placeholder="Repeat Password" name="rpsw" required>
			<br>
			<label><b>Password</b></label>
			</dv>
			<br><br><br><br>
			
			
			<label>
			<input type="checkbox"  id= "cnfm" onclick="enb()" style="margin-bottom:15px"> Remember me
			</label>
			<br>
			
			<p>By creating an account you agree to our <a href="../reserv- redomore-lig-user/legalPolicies.html" style="color:dodgerblue">Terms & Privacy</a>.</p>

			<div class="button">
				<a href="index.html"><button type="button" class="cancelbtn">Cancel</button>
				<a href=""><button type="submit" name="register" id="subb" class="signupbtn" onclick="sub()">Sign Up</button></a>
				<br><br>
				 <div class="container signin">
				<p>Already have an account? <a href="../website login/pro.html" style="color:dodgerblue">Sign in</a>.</p>
				</div>
	
			</div>
		</div>
  
	</div>
   		 
		</form>
		<div>
	<div>

<div class="footer">
	<div class="top-footer">


<div class="footer-text1">
	<h1>ABOUT TRAIN LINE</h1>	
	<p>Trainline is an independent digital rail and coach platform.Trainline's main offices are in Colombo.We try to provide better service for you </p>



</div><!-- footer-text1 -->

	<div class="social-icons">
		
		<ul>
			<li><a href="#"><img src="img/Social/facebook-icon.png"></a></li>
			<li><a href="#"><img src="img/Social/google-plus-icon.png"></a></li>
			<li><a href="#"><img src="img/Social/linkedin-icon.png"></a></li>
			<li><a href="#"><img src="img/Social/pinterest-icon.png"></a></li>
			<li><a href="#"><img src="img/Social/twitter-icon.png"></a></li>


		</ul>
	</div><!-- social-icons -->


</div><!-- top-footer -->



<div class="top-footer2">




<div class="contact">
<h1>CONTACT US</h1>
</div><!-- contact -->



<div class="contact-icons">
<img src="img/file-mobile-smartphone-icon--wikimedia-commons-0.png" width="40" height="40">

<img src="img/Location-512.png"width="40" height="40" id="location">
</div><!-- contact-icons -->




<div class="text-footer">
	<a href="">+0123456789</a>

<p>SL TRAIN LINE <br> Union place <br> Comlombo 07</p>

	</div><!-- text-footer -->

</div><!-- top-footer2 -->

<div class="logo">
	<img src="img/logo/Unt.png" id="text-logo">
<img src="img/logo/Train2.png" width="200" height="200"id="pic-logo">


</div><!-- logo" -->


</div><!--footer-->

<div class="footer-buttom">
	

<p>Copyright 2019 © SL Trainline All Rights Reserved<a href="#"></a></p>


</div><!-- footer-buttom -->

</body>
</html>



<!DOCTYPE html>
<html>
<head>
<title>Train Line</title>
<link rel="stylesheet" type="text/css" href="style.css"><br>
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
</head>
<body>



<style type="text/css">
	

*{text-decoration: none;}

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
margin-top: -20px;
  background: linear-gradient(to bottom left, #0000ff -8%, #ffffff 56%);
padding-right: 3px;
width:100%;
height: 110px;
max-width: 1500px;
min-width: 1500px;
margin-bottom: 750px;
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
	margin-top: 1100px;
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










</style>




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





	<div class= "logbox" style="float"> 
	<h1 class="h11">LOG IN </h1>
	<form action="pro connection.php" method="post">
		<p>User Name<p></br>
		<input id="username" name="name" type ="text" name"un" placeholder ="User name"></br>
		<p>Password<p></br>
		<input id="password" type ="password" name="psw" placeholder ="Password"></br>
		<input class="sub"type ="submit" value="log in" onclick="validate()"></br>
		<a href ="#">forgot password</a><br>
		<a href = "Registration.php">Create account</a><br>
		
	</form>
	<div class = "des">
	
		<img src="images/trainicon.png" width = "200" height = "200">
	
		<h1>The best price</h1>
		<h3>Compare trains to find the best option for journey.</h3>
		
		<h1>Book and travel easily<h1>
		<h3>Use our web site to get information about trains</h3>
		
		<h1>Pay online</h1>
		<h3>Pay online using your visa card<h3>
		
	
	
	</div>
	
</br>
</div>








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
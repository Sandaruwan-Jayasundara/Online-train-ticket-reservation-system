<!DOCTYPE html>
<html>
<head>

		<link rel= "stylesheet" type="text/css" href="CSS/style.css">
</head>
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
	margin-top: 400px;
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

<body>



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
				<?php
					if(!isset($_COOKIE["email"])) {
						$set = 1;
					} else {
						$set = 0;
					}
				?>
						
				<?php
					if($set){ ?>
						<li><a href="index.html">HOME</a></li>
						<li><a href="pro.php">RESERVATION</a></li>
						<li><a href="Shedule.php">SHEDULE</a></li>
						<li><a href="pro.php">LOG IN</a></li>
						<li><a href="contact-us.php">contact us</a></li>
						<li><a href="About us.html">About us</a></li>
				<?php } 
					else { ?>
						<li><a href="index -user.html">HOME</a></li>
						<li><a href="reservation.html">RESERVATION</a></li>
						<li><a href="Shedule.php">SHEDULE</a></li>
						<li><a href="logout.php">LOG OUT</a></li>
						<li><a href="contact-us.php">contact us</a></li>
						<li><a href="About us.html">About us</a></li>
				<?php } ?>
					
			</ul>


		</div><!--nav-bar-links-->

</div><!--nav-bar-->

<!-----------------------------END ------Navigaion ---------bar-------------------------->


	
<center>
<div class="mid">
<h1 id="heading">Sri Lanka Train Schedule</h1>



<br><br><br>

<p id="select2">Select your start Station and End Station *</p>

</center>
<form action="schedulesearch.php" method="POST">
<table>
		<tr>
				<td class="we"><p class="select">Start Station</p></td> 
				
				<td class="we">	<center><select name="ss">
						<option>Place</option> <option>COLOMBO FORT</option> <option>JAFFNA</option> <option>KANDY</option> <option>HATTON</option> 
						<option>MOUNT LAVINIA</option> <option>BANDARAWELA</option> <option>GALLE</option> <option>ELLA</option>
						</select></center>
				</td>
		
		
				
				<td class="we"><p class="select">End Station</p></td>
				
				<td class="we">	<center><select name="es">
						<option>Place</option> <option>COLOMBO FORT</option> <option>JAFFNA</option> <option>KANDY</option> <option>HATTON</option> 
						<option>MOUNT LAVINIA</option> <option>BANDARAWELA</option> <option>GALLE</option> <option>ELLA</option>
						</select></center>
				</td>
		</tr>		
</table>

	<button class="button" onclick="myfunction()">Search</button>
</form>
<p id="demo"></p>
<br><br><br>
<p id="populer" style="color: black; margin-left: 450px;"><b>All train Schedules</b></p>

<?php
	include 'mycon.php';
	
	$conn = OpenCon();
	
	
	$sql = "SELECT * FROM schedule"; 
	if ($result=mysqli_query($conn,$sql))
	{
		

		echo "<table>";
		
		while ($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Start'] . "</td><td>" . $row['STime'] . "</td><td>" . $row['End'] . "</td><td>" . $row['ETime'] . "</td><td>" . $row['Frequency'] . "</td></tr>" ; 
		}

		echo "</table>";
	}
	
?>
<br><br>
<form action="Shedule.php">
<button class="button">REFRESH</button>

</form>

<!--<table>
	<tr>
			<th style="font-size: 25px;">Start Station</th>
			<th style="font-size: 25px;">Time durations</th>
			<th style="font-size: 25px;">End Station</th>
			<th style="font-size: 25px;">Frequency</th>
			
	</tr>
	<tr>
			<td class="white">COLOMBO FORT</td>
			<td class="white">05:35:00-09:10:00</td>
			<td class="white">MATARA</td>
			<td class="white">WEEKEND</td>
			
	</tr>
	<tr>
			<td class="white">COLOMBO FORT</td>
			<td class="white">08:35:00:00-09:53:00</td>
			<td class="white">GALLE</td>
			<td class="white">DAILY</td>
	
	</tr>
	<tr>
			<td class="white">JAFFNA</td>
			<td class="white">07:15:00:00-09:25:00</td>
			<td class="white">ELLA</td>
			<td class="white">DAILY</td>
	
	</tr>
	
	<tr>
			<td class="white">KANDY</td>
			<td class="white">07:15:00:00-08:25:00</td>
			<td class="white">COLOMBO FORT</td>
			<td class="white">DAILY</td>
	
	</tr>
	
	<tr>
			<td class="white">HATTON</td>
			<td class="white">06:15:00:00-14:25:00</td>
			<td class="white">COLOMBO FORT</td>
			<td class="white">DAILY</td>
	
	</tr>
	
	<tr>
			<td class="white">MOUNT LAVINIA	</td>
			<td class="white">16:15:00:00-09:25:00</td>
			<td class="white">ALUTHGAMA </td>
			<td class="white">WEEKEND</td>
	
	</tr>
	
	<tr>
			<td class="white">MOUNT LAVINIA	</td>
			<td class="white">07:15:00:00-03:25:00</td>
			<td class="white">GALLE</td>
			<td class="white">DAILY</td>
	
	</tr>
	
	<tr>
			<td class="white">HATTON</td>
			<td class="white">07:15:00:00-09:25:00</td>
			<td class="white">ALUTHGAMA </td>
			<td class="white">WEEKEND</td>
	
	</tr>
	<tr>
			<td class="white">BANDARAWELA</td>
			<td class="white">07:15:00:00-05:25:00</td>
			<td class="white">JAFFNA</td>
			<td class="white">DAILY</td>
	
	</tr>
	<tr>
			<td class="white">GALLE</td>
			<td class="white">07:15:00:00-09:25:00</td>
			<td class="white">KANDY</td>
			<td class="white">DAILY</td>
	
	</tr>
	<tr>
			<td class="white">KANDY</td>
			<td class="white">07:15:00:00-09:30:00</td>
			<td class="white">MATARA</td>
			<td class="white">WEEKEND</td>
	
	</tr>
	
	

</table>-->



<script>
	function myfunction(){
		var txt;
		if( confirm("You will be navigated to the respective schedule if there any.")){
			txt = "you will navigate to the paticular schedule";
		}
		else{
			txt = "Press ok to navigate";
		}

		document.getElementById("demo").innerHTML = txt;
	}
</script>



</div>
</body>




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


</html>
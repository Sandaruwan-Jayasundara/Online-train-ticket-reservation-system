<?php 


$from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');
$class_type = filter_input(INPUT_POST, 'first');
$date = filter_input(INPUT_POST, 'date');
$month = filter_input(INPUT_POST, 'Month');
$year = filter_input(INPUT_POST, 'Year');
$SeatNo = filter_input(INPUT_POST, 'seats');


$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="reservations";


//connection    ..............

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


if (mysqli_connect_error()) {
	# code...
	die('connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{


	
	$sql ="INSERT INTO book_seats(no_seats,from_station,where_to,class,booking_date	,booking_month,booking_yeat) values('$SeatNo','$from','$to','$class_type','$date','$month','$year')";


if($conn->query($sql)){

	//echo "<br>"."Your massege was submitted. Thanks for your cooperation reservation";
}
else{
	echo "Error :".$sql."<br>".$conn->error;
}
$conn->close();

}


 ?>






<!DOCTYPE html>
<html>
<head>
	<title>SL Trainline</title>
	<link rel="stylesheet" type="text/css"  href="style/payment.css">
	<style>
	.img{

	background: url(../images/shed2.jpg);
	height: 800px;
	margin-top:200px;
	width: 100%;
	padding-top: 10px;
	padding-bottom: 60px;
	background-size:cover;
	-webkit-background-size: cover;
	background-attachment: fixed;

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
					<li><a href="../reserv- redomore-lig-user/reservation.html">Reservation</a></li>
					<li><a href="../regis-pay-rese/Registration.html">Register</a></li>
					<li><a href="../website login/pro.html">Log In</a></li>
					 <li><a href="../shed - about/Shedule.html">Shedule</a></li>
					<li><a href="contact-us.php">contact us</a></li>
				    <li><a href="../shed - about/About us.html">About us</a></li>


				</ul>


		</div><!--nav-bar-links-->

</div><!--nav-bar-->
		
<!-------   TEST------------------ SLIDE--------------- START ------------------->

<!-----------------------------END ------Navigaion ---------bar-------------------------->



	<div class="img">
	<center>
	<h1>Checkout</h1>
	</center>
	<div class="trans">
	<div class="row">
		<div class="col-75">
			<div class="container">
      <form>
      
        <div class="row">
          <div class="col-50">
            <h3>Ticket Checkout</h3>
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="S.A.Pamuditha Rasanjana">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="someone@example.com">
            <label for="adr">Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Gampaha">

            <div class="row">
              
              <div class="col-50">
                <label for="zip">Postal Code</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Senadeera S.A.P.R.">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
		  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> I Agree to terms & Privacy
        </label>
		
        <input type="submit" value="Continue to checkout" class="btn">
		<input type="reset" value="Reset" onclick= href"pay'" class="btn">
      </form>
    </div>
  </div>
   </div>
</div>
</div>
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

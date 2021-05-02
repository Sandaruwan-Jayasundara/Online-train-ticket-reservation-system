<?php 


$username = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$comm = filter_input(INPUT_POST, 'message');


$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="contact";


//connection    ..............



$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_error()) {
	# code...
	die('connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sql ="INSERT INTO comment(Name,Email,Comments) values('$username','$email','$comm')";

			header("location:contact-us.php");

if($conn->query($sql)){

	echo "<br>"."Your massege was submitted. Thanks for your cooperation";
}
else{
	echo "Error :".$sql."<br>".$conn->error;
}
$conn->close();

}





if (!empty($username)) {
	# code...
	if (!empty($email)) {
		# code...
		if (!empty($comm)) {
			# code...


		}
		else{
			echo "comment should not be empty";
		}
	}
	else{
		echo "emalid not be empty";
	}

}
else{
	echo "username should not be empty";
}



 ?>
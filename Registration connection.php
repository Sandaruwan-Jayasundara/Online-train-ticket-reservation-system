
<?php 



$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="train_reservation";


//connection    ..............

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (isset($_POST['register'])) {
	# code...
	session_start();
	$fname = filter_input(INPUT_POST, 'fname');
	$lname= filter_input(INPUT_POST, 'lname');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'psw');
	$Repassword = filter_input(INPUT_POST, 'rpsw');
	$password = md5($password);

		if ($password == $Repassword) {
			# code...
		
			$sql ="INSERT INTO user(email,fanme,lname,password) VALUES('$email','$fname','$lname','$password')";
	
			mysqli_query($conn,$sql);

	
								if ($conn ->query($sql)) 
								{
										header("location:pro.php");
								}
								else{
									//echo "Error ". $sql . "" . $conn->error;
									header("location:pro.php");
								}



		}


		else{


			$_SESSION['message'] = "The entered pass don't match";

			}


}

?>
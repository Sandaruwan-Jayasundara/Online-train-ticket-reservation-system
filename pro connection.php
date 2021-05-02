
<?php 


	$host = "localhost";
			$dbusername ="root";
			$dbpassword = "";
			$dbname = "train_reservation";




			$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);




	
	$Email = filter_input(INPUT_POST, 'name');
	$password = filter_input(INPUT_POST, 'psw');

	$sql = "select * from user where email = '$Email'";

$result = mysqli_query($conn,$sql);


$row=mysqli_fetch_assoc($result);

$url = 'index -user.html';
//$url .= '?email='.$Email.'';

if ($row['email']== $Email && $row['password'] == $password){
	# code...
	$cookie_name = "email";
	setcookie($cookie_name, $Email, time() + (86400 * 30), "/"); // 86400 = 1 day
//	echo "login success".$row['email'];
	echo "<script>
		alert('Login Successful');
		window.location.href='$url';
		</script>";
		

}



else
{
	echo "<script>
		alert('Login Failed');
		window.location.href='pro.php';
		</script>";

}




 ?>
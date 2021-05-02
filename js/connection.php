<?php 



$user_name = filter_input(INPUT_POST, 'name');
$Email = filter_input(INPUT_POST, 'email');
$comments = filter_input(INPUT_POST, 'message');

if(!empty($user_name)){

	if (!empty($Email)) 
	{
	# code...


		if (!empty($comments))
		 {
			$host = "localhost ";
			$dbpassword = "";
			$dbname = "comments";




			$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

					if (mysqli_connect_error())
					 {
						die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());

					}

					else
						$sql = "INSERT INTO comments(Name,Email,Comment)
						values ('$user_name','Email','comments')";


								$conn->close();



		else
			echo "comments should not be empty";
			die();
	}


	else
		echo "Email should not be empty";
		die();
	

}
else
	echo "User name should not be empty";
	die();
 ?>
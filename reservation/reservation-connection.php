<?php 

$SeatNo = filter_input(INPUT_POST, 'seats');
$from = filter_input(INPUT_POST, 'from');
$to = filter_input(INPUT_POST, 'to');
$class_type = filter_input(INPUT_POST, 'first');
$date = filter_input(INPUT_POST, 'date');
$month = filter_input(INPUT_POST, 'Month');
$year = filter_input(INPUT_POST, 'Year');



$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="reservation";


//connection    ..............



$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if (mysqli_connect_errno()) {
	# code...
	die('Database connection failed'. mysqli_connect_error());
}

else
{


//	echo "connection succesfully";


}










	$sql ="INSERT INTO book_seats(no_seats,from_station,where_to,class,booking_date,booking_month,booking_yeat) values($SeatNo,'$from','$to','$class_type','$date',$month,$year,)";


if($conn->query($sql)){

	echo "new record is insert";
}
else{
	echo "Errors :".$sql."<br>".$conn->error;
}
$conn->close();







if (!empty($SeatNo)) {
	# code...
	if (!empty($from)) {
		# code...
		if (!empty($to)) {
			# code...
			if (!empty($class_type)) {
				# code...
			}
			else{
				echo "class should not be empty";
			}
			if (!empty($date)) {



				# code..



				if (!empty($month)) {
					# code...
					if (!empty($year)) {
						# code...
						echo "all data complete";


					}
					else{
						echo "year should not be emplty";
					}

				}

				else{


					echo "month should not be empty";
				}

			}
			else{

				echo "date should not be empty";

			}

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
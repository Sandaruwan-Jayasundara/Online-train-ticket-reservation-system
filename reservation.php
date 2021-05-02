<?php
    include 'mycon.php';
	
	$conn = OpenCon();

	$SeatNo = filter_input(INPUT_POST, 'st');
	$from = filter_input(INPUT_POST, 'start');
	$to = filter_input(INPUT_POST, 'end');
	$class_type = filter_input(INPUT_POST, 'cl');
	$date = filter_input(INPUT_POST, 'dt');
	$month = filter_input(INPUT_POST, 'mon');
	$year = filter_input(INPUT_POST, 'yr');
	$mail = $_COOKIE["email"];
	
	$sql ="INSERT INTO reservation(no_of_seat,start,end,class,date,month,year,email) values('$SeatNo','$from','$to','$class_type','$date','$month','$year','$mail')";

	if($conn->query($sql)){
		
		echo "<script>
		alert('Your massege was submitted. Thanks for your cooperation reservation');
		window.location.href='reservation.html';
		</script>";
	}
	else{
		echo "Error :".$sql."<br>".$conn->error;
	}
	CloseCon($conn);
	
?>
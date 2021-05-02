<?php

$fname = $_POST["field1"];
$lname = $_POST["field2"];
$dob = $_POST["field3"];
$email = $_POST["field4"];
$npassword = $_POST["field5"];
$cpassword = $_POST["field6"];
$NIC = $_POST["field7"];
$phone = $_POST["field8"];

$sql ="INSERT INTO(F_name,L_name,Dob,Email,N_password,C_password,NIC,Phone) VALUES ('','$fname','$lname','$dob','$email','$npassword','$cpassword','NIC','phone')"

if(mysqli_query($conn,$sql)){
	header ("Location: edit2.php");
}
else{
	echo " <script> alert ('ERROR:could not able insert $sql. ')</script>";
}
mysqli_close($conn);
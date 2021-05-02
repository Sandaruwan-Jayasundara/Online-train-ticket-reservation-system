
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<tr>
	<th>Name</th>
	<th>Emp</th>
	<th>Email</th>
	<th>PHONE</th>

</tr>


<?php 

$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="train_reservation";


//connection    ..............



$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


	$sql ="SELECT * FROM add_employee";
$result = $conn -> query($sql);

if ($result -> num_rows > 0) {
	# code...
	while ($row = $result -> fetch_assoc()) {
		# code...
		echo "<tr><td>".$row["Name"]."<td><td>".$row["Emp_No"]."<td><td>".$row["Email"]."<td><td>".$row["Phn_No"]."<tr><td>";
	}
	echo "</table>";
}
else{

echo "0 result";

}

$conn->close();


 ?>

</table>
 </body>
</html>
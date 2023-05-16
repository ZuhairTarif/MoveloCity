<!DOCTYPE html>
<html>
<head>
<title>View Orders</title>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<?php
	if(filesize("order.json")<=0){
		echo"No users Available";
	}
	else{
$f = fopen("order.json", 'r');
	$s = fread($f, filesize("order.json"));
	$data = json_decode($s);

	echo "<table>";
	echo "<tr>";
	echo "<th>Firstname</th>";
	echo "<th>LastName</th>";
	echo "<th>Shift</th>";
	echo "<th>Email</th>";
	echo "<th>Mobile No</th>";
	echo "<th>Address</th>";
	echo "<th>Country</th>";
	echo "<th>Username</th>";
	echo "</tr>";
	for ($x = 0; $x < count($data); $x++) {
	echo "<tr>";
  	echo "<td>" . $data[$x]->firstname . "</td>";
	echo "<td>" . $data[$x]->lastname . "</td>";
	echo "<td>" . $data[$x]->shift . "</td>";
	echo "<td>" . $data[$x]->email . "</td>";
	echo "<td>" . $data[$x]->mobile_no . "</td>";
	echo "<td>" . $data[$x]->address . "</td>";
	echo "<td>" . $data[$x]->country . "</td>";
	echo "<td>" . $data[$x]->username . "</td>";
	echo "</tr>";
	}
	echo "</table>";
	fclose($f);
	}
	?>
</body>
</html>
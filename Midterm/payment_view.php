<!DOCTYPE html>
<html>
<head>
<title>View Clients</title>
<style>
table, th, td {
  border: 2px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<?php
	if(filesize("payment.json")<=0){
		echo"No users Available";
	}
	else{
$f = fopen("payment.json", 'r');
	$s = fread($f, filesize("payment.json"));
	$data = json_decode($s);

	echo "<table>";
	echo "Paid Clients";
	echo "<tr>";
	
	
	
	
	echo "<th>Mobile No</th>";
	
	echo "<th>Method</th>";
	echo "<th>Username</th>";
	echo "</tr>";
	for ($x = 0; $x < count($data); $x++) {
	echo "<tr>";
  	
	
	
	echo "<td>" . $data[$x]->method . "</td>";
	echo "<td>" . $data[$x]->username . "</td>";
	echo "<td>" . $data[$x]->mobile_no . "</td>";
	
	
	echo "</tr>";
	}
	echo "</table>";
	fclose($f);
	}
	?>
</body>
</html>
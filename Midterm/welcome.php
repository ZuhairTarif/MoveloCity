<html>
<head>
<title>Dashboard</title>
<?php require('Header.php'); ?>
</head>
<body>
<B><h3>WELCOME AS TRANSPORTER</h3>


<table>
<tr>
        <th>[______Orders______]</th>
        <th>[____Payments____]</th>
        <th>[______Clients______]</th>
</tr></br>
</br><tr>
    <td><a href="./order_data.php">Order_data</a></td>
    <td><a href="./payment_data.php">Payment_data</a></td>
    <td><a href="./payment_view.php">Client_data</a></td>
</tr>
</table><hr>
<br></br>
<B><h3><a href="./Users.php">Available Transporters</a></h3></br>
<B><h3><a href="./forgot.php">Change Password</a></h3><hr></br></br>
</br></br><h3><a href="./logout.php">Logout</a></h3>
</body>
<?php require('Footer.php'); ?>
</html>

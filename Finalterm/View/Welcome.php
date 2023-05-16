<?php
    include("../Control/Transporter_Reg_Process_chk.php");
    include "../Control/Protection.php";
    verifyNotLoggedIn();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>

<body>
<h1>
    <div id="labels">Transport Management System </div>
</h1>
<hr>
<h2>
    <div id="labels"> TRANSPORTER</div>
</h2>
<hr>
</br>

<div class="text-align-center">
<div class="div-align-center">
            <button class="greenButton" onclick="location.href='UserDetails.php'">User Details</button>
            <button class="greenButton" onclick="location.href='client.php'">Transporters</button>
            <button class="greenButton" onclick="location.href='order.php'">Book Order</button>
            <button class="greenButton" onclick="location.href='viewOrder.php'">View Order</button>
        </div>
        
</div>
<br>
</br>
<br>
</br>
<div class="div-align-center">

            <button class="greenButton" onclick="location.href='payment.php'">Take Payment</button>
            <button class="greenButton" onclick="location.href='cp.php'">Change Password</button>
            <button class="greenButton" onclick="location.href='Search.php'">Search</button>
            <button class="greenButton" onclick="location.href='../Control/Transporter_Logout.php'">Logout</button>
        </div>    


</body>

</html>
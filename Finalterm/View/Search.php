<?php
    include "../Control/order_reg.php";
    include "../Model/SearchUser.php";
    include "../Control/Protection.php";
    verifyNotLoggedIn();
    
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
    <script src="../JS/Search.js"></script>

</head>

<body>
<h1>
    <div id="labels">Transport Management System</div>
</h1>
<hr>
<h2>
    <div id="labels"> TRANSPORTER</div>
</h2>
<hr>
</br>

<div class="text-align-center">
    <div>
        <h2> Search Users</h2>
        <input type="text" name="text" onkeyup="fetchUsers(this.value)">
    </div>
    <br>
    <div id="fetched-user">Type anything to search!</div>
    <br><br>
    <button class="greenButton" onclick="location.href='Welcome.php'">Go Back</button>
</div>

</body>

</html>
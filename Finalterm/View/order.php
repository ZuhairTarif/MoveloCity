<?php
    session_start();
    include "../Control/Protection.php";
    verifyNotLoggedIn();
    include("../Model/bookorder.php");
    
?>
<!DOCTYPE html>
<html>

<title>TMS</title>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/form.css">

</head>
<body>
<h2><p id=labels2>Book Order</P></h2>
<div id="box">
    <form action="" method="POST" onsubmit="return orderformcheck()" novalidate>
        <p id="message"></p>

        <p id="labels"> Customer Name:
            <input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

        <p id=labels>National Id:
            <input type="number" placeholder="Enter National ID" name="nid" id="nid"></p>

        <p id="labels">Mobile:
            <input type="tel" name="mobile" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}"></p>

        <label>
            <p id="labels">Set an username: <input type="text" placeholder="Set an username" name="uname" id="uname">
            </p></label>

        <label><p id="labels">Set a Password: <input type="password" placeholder="Set Password" name="pass" id="pass">
            </p></label>

        <?php if (isset($_POST["submit"])) register(); ?>
        <br>
        <br>
        <label><input type="submit" name="submit" class="greenButton" value="Register"></label>
        <label><input type="Reset" class="redButton"></label>

        <br>
        <a href="Home.php">Go Back</a>
    </form>

</div>

<script src="../JS/OrderValidate.js"></script>

</body>
</html>
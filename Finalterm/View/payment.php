<?php
    include("../Model/takepayment.php");
    include "../Control/Protection.php";
   verifyNotLoggedIn();
    
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
    <form action="" method="POST" onsubmit="return paymentformcheck()" novalidate>
        <p id="message"></p>

        <p id="labels"> Customer Name:
            <input type="text" placeholder="Enter Full Name" name="name" id="name"></p>

        <p id=labels>Bkash No:
            <input type="number" placeholder="Bkash" name="bkash" id="bkash"></p>

        <p id="labels">Otp:
            <input type="number" name="otp" placeholder="012-3456-7891" pattern="[0-9]{3}[0-9]{4}[0-9]{4}"></p>

        

        <?php if (isset($_POST["submit"])) payment(); ?>
        <br>
        <br>
        <label><input type="submit" name="submit" class="greenButton" value="Payment"></label>
        <label><input type="Reset" class="redButton"></label>

        <br>
        <a href="Home.php">Go Back</a>
    </form>

</div>

<script src="../JS/PaymentValidate.js"></script>

</body>
</html>
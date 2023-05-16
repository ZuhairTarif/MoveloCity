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

<div>
    <h2 class="text-align-center">YOUR DETAILED INFO</h2>

    <div class="div-align-center">
        <form action="" method="post">
            <b>Name: </b> <?php echo $_SESSION["name"] ?> <br>
            <b>National ID: </b> <?php echo $_SESSION["nid"] ?> <br>
            <b>Transports Model: </b> <?php echo $_SESSION["model"] ?> <br>
            <b>Mobile: </b><?php echo $_SESSION["tnumber"] ?> <br>
            <b>License Issue Date: </b> <?php echo $_SESSION["lid"] ?> <br>
            <b>License Expire Date: </b> <?php echo $_SESSION["led"] ?> <br>
            <b>Experience: </b> <?php echo $_SESSION["experience"] ?> <br>
            <b>Availability: </b> <?php echo $_SESSION["availability"] ?>
            <br><br>
        </form>
    </div>
    <div class="text-align-center">
        <a href="Transporter_Modify.php"><button class="greenButton">Modify Details</button></a>
        <h2><a href="Welcome.php">Go Back</a></h2>
        <h2><a href="../Control/Transporter_Logout.php">Logout</a></h2>
    </div>
</div>
</br>
</body>

</html>
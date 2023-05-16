<?php
    include("../Model/TransporterModify.php");
    include "../Control/Protection.php";
    verifyNotLoggedIn();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>

<body>
<h1>
    <div id="labels"> SHIFTING PARTNER</div>
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
        <form action="" method="POST">
            Name: <input type="text" name="name" value="<?php echo $_SESSION["name"] ?>"><br>
            National ID: <input type="text" name="nid" value="<?php echo $_SESSION["nid"] ?>"><br>
            Transports Model: <input type="text" name="model" value="<?php echo $_SESSION["model"] ?>"><br>
            Mobile<input type="text" name="tnumber" value="<?php echo $_SESSION["tnumber"] ?>"><br>
            License Issue Date: <input type="text" name="lid" value="<?php echo $_SESSION["lid"] ?>"><br>
            License Expire Date: <input type="text" name="led" value="<?php echo $_SESSION["led"] ?>"><br>
            Experience: <input type="text" name="experience" value="<?php echo $_SESSION["experience"] ?>"><br>
            Availability: <input type="text" name="availability" value="<?php echo $_SESSION["availability"] ?>">
            <br><br>
            <div class="text-align-center">
                <input type="submit" name="update" class="greenButton" value="Update Info">
                <h2><a href="../Control/Transporter_Logout.php">Logout</a></h2>
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST')  modify() ?>
            </div>
        </form>
    </div>

</div>
</br>
</body>

</html>
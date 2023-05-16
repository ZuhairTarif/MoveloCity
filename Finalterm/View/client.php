<?php
    include("../Control/order_reg.php");
    include "../Control/Protection.php";

    verifyNotLoggedIn();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
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

<div>
    <h2 class="text-align-center">Available Transporters</h2>

    <div class="div-align-center"></div>
    <?php
        $query = "SELECT * FROM Users";
        $mysqliResult = executeQuery($query);

        if ($mysqliResult->num_rows > 0) {
            $i = 0;
            while ($row = $mysqliResult->fetch_assoc()) {
                echo ' 
                Transporter ' . ++$i . '<br>
                <b>Name: </b> ' . $row['name'] . ' <br>
                <b>Model: </b> ' . $row['mobile'] . ' <br>
                <b>Model: </b> ' . $row['model'] . ' <br>
                <b>Username: </b> ' . $row['uname'] . ' <br>
                <br>';
            }
        }
    ?>
    <div class="div-align-center">
            <button class="greenButton" onclick="location.href='Welcome.php'">Go Back</button>
        
        </div>
</body>

</html>
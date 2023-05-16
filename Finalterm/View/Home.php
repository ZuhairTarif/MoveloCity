<?php
    session_start();
    include "../Control/Protection.php";
    verifyLoggedIn();
?>

<html>
<title>TMS </title>
<head>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>
<body>

</br>
<h1><p id="labels"> Transport Management System </p></h1>
<div id="myDIV"></div>
<div id="frm1">
    <img src="../Images/shifting1.jpg" alt="shift" style="width:50%">
    <table class="center2">
        <!-- <tr><th><p id="labels2">LOG IN AS</p></th></tr>-->
        <h1 class="text-align-center">Transporter</h1>

        <div class="div-align-center">
            <button class="greenButton" onclick="location.href='Login.php'">Login</button>
            <button class="greenButton" onclick="location.href='Transporter_Reg_Form.php'">Register</button>
        </div>
    </table>
</div>

</body>
</html>

<?php
    
    
    include "../Model/ForgetModel.php";
    include "../Control/Protection.php";
    verifyLoggedIn();
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget</title>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>

<body>
</br>
<h1><p id="labels"> Transport Management System </p></h1>

<div id="myDIV"></div>


<div id="frm1">
    <img src="../Images/shifting1.jpg" alt="shift" style="width:50%">

    <h1><p id="labels2">Forget Password</p></h1>
    <div class="div-align-center">
        <form action="" method="POST">
            <p>
                <label for="uname"> Username: &nbsp </label>
                <input type="text" id="uname" name="uname"/>
            </p>
            <p>
                <label for="newPassword"> New Password: &nbsp </label>
                <input type="password" id="newPassword" name="newPassword"/>
            </p>

            <p>
                <label for="confirmPassword"> Confirm Password: &nbsp </label>
                <input type="password" id="confirmPassword" name="confirmPassword"/>
            </p>
            <div class="text-align-center">
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') cp(); ?>
                <br><br>
                <input type="submit" class="redButton" value="Forget">
                <br>
                <p><a href="Welcome.php">Go Back</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>


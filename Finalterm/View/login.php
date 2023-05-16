<?php
    require "../Model/TransporterLogin.php";
    include "../Control/Protection.php";
    verifyLoggedIn();
    $cookie_name="loginCheck"; 
    $cookie_value="1";   
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
 
 
 
if (!isset($_COOKIE['count'])) { 
  echo "Welcome! This is the first time you have viewed this page today."; 
  $cookie = 1;
  setcookie("count", $cookie);
}
else
{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page today ".$_COOKIE['count']." times.";
};
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN/Sign In</title>
    <link rel="stylesheet" type="text/css" href="../Style/Home_Style.css">
</head>

<body>
</br>
<h1><p id="labels"> Transport Management System </p></h1>

<div id="myDIV"></div>


<div id="frm1">
    <img src="../Images/shifting1.jpg" alt="shift" style="width:50%">

    <h1><p id="labels2">LOG IN </p></h1>
    <div class="div-align-center">
        <form action="" method="POST">
            <p>
                <label for="uname"> UserName: </label>
                <input type="text" id="uname" name="uname"/>
            </p>
            <p>
                <label for="pass"> Password: &nbsp </label>
                <input type="password" id="pass" name="pass"/>
            </p>
            <br><br>
            <div class="text-align-center">
                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') login() ?>
                <br>
                <input type="submit" class="greenButton" value="Login">
                <br>
                <a href="Forget.php">Forget Password?</a>
                <p>New here? <a href="Transporter_Reg_form.php">Register</a></p>
            </div>
        </form>
    </div>
</div>
</body>
</html>  


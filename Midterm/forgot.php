<html>
<head>
<title>Change Password</title>
<?php require('Header.php'); ?>
</head>
</body>

<fieldset>
<legend>Change Password</legend>
</br><form action="./newpass.php" method="POST">
 </br>
    <label>Username: <input type="text" name="uname"></label> 
    <label>OLD PASSWORD:  <input type="password" name="pass"></label>
    <label>NEW PASSWORD:  <input type="password" name="newpass"></label>

</fieldset>
    <h3><input type="submit" name="Confirm3" Value="Confirm">
</form>
<?php require('Footer.php'); ?>
</body>
</html>
 
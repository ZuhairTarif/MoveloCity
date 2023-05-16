<!DOCTYPE html>
<html>
<head>
<?php require('Header.php'); ?>
<title>LogIn</title>
</head>
<body>
<?php
	session_start(); 
?>
	<?php
		$passwordErrMsg=$usernameErrMsg="";
		$Password=$Username ="";
		$loginStatus="";
		$count1=0;
			$errorcount=0;
			if ($_SERVER['REQUEST_METHOD'] === "POST"){
			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
			$Password = test_input($_POST['password']);
			$Username = test_input($_POST['username']);
			if(empty($Password)){
				$passwordErrMsg = "Password is Empty";
				$errorcount++;
			}
			if(empty($Username)){
				$usernameErrMsg = "Username is Empty";
				$errorcount++;
			}	
			}
			if($errorcount==0 and $Username!="" and $Password!=""){
				if(filesize("data.json")>0){
					$f = fopen("data.json", 'r');
					$s = fread($f, filesize("data.json"));
					$data = json_decode($s);
					for ($x = 0; $x < count($data); $x++) {
						if($data[$x]->username===$Username and $data[$x]->password===$Password){
							header('location: welcome.php');
							$loginStatus="Welcome";
							$count1++;
							break;
						}
						else
							$loginStatus="Incorrect Username/Password";
					}
						
				}				
			}
			
	?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate>
	<fieldset>
		<legend>Log in Info</legend>
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
		<span style="color: red">*
		<?php
			echo $usernameErrMsg;
		?>
		</span>
		<br><br>
		<label for="password">Password</label>
		<input type="password" name="password" id="password">
		<span style="color: red">*
		<?php
			echo $passwordErrMsg;
		?>
		</span>
	</fieldset>
	<br>
	<input type="Submit" value="Log in">
	<div><a href="cp.php">Forgot Password?</a></div>
	
	<h1><?php
			echo $loginStatus;
?></h1>
</form>
</body>
<?php require('Footer.php'); ?>
</html>
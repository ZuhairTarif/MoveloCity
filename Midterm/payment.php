<!DOCTYPE html>
<html>
<head>
<title>Payment</title>
</head>
<?php require('Header.php'); ?>
<body>
	<?php 
	$usernameErrMsg = $otpErrMsg = $mobileErrMsg = $methodErrMsg = "";
	$registrationStatus="";
	$errorcount=0;
	$count=0;
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		
		
		$Mobile_no = test_input($_POST['mobile_no']);
		
		
		$OTP = test_input($_POST['otp']);
		$Method = isset($_POST['method']) ? test_input($_POST['method']):NULL;
		
		$Username = test_input($_POST['username']);
		
		
		
		if(empty($Username)){
			$usernameErrMsg = "Username is Empty";
			$errorcount++;
		}
	
		if(empty($Method)){
			$methodErrMsg = "Select a payment method";
			$errorcount++;
		}
		if(empty($Mobile_no)){
			$mobileErrMsg = "Mobile  is Empty";
			$errorcount++;
		}
		
		
		if(empty($OTP)){
			$otpErrMsg = "Otp is Empty";
			$errorcount++;
		}
		
      		
		if($errorcount==0){
			if(filesize("payment.json")<=0){
			$arr = array(array('otp'=> $OTP, 'mobile_no'=>$Mobile_no,'method'=>$Method,'username'=>$Username));
			$f = fopen("payment.json", "a");
			fwrite($f, json_encode($arr));
			fclose($f);
			}
			else if(filesize("payment.json")>0){
			$arr2 = array('otp'=> $OTP, 'mobile_no'=>$Mobile_no,'method'=>$Method,'username'=>$Username);
			$f = fopen("payment.json", 'r');
			$s = fread($f, filesize("payment.json"));
			$data = json_decode($s);
			array_push($data, $arr2);
			fclose($f);
			$f = fopen("payment.json", "w");
			fwrite($f, json_encode($data));
			fclose($f);
			}

			$registrationStatus="Confirmed";
		}

		else{
			$registrationStatus="Confirmation failed";
		}	
	}		
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate>
	<fieldset>
    <legend>Payment Details</legend>
		<label for="otp">Otp:</label>
		<input type="number" name="otp" id="otp">
		<span style="color: red">*
		<?php
			echo $otpErrMsg;
		?>
		</span>
		</span>
		<br><br>
		<label for="mno">Mobile No</label>
		<input type="number" name="mobile_no" id="mno">
		<span style="color: red">*
		<?php
			echo $mobileErrMsg;
		?>
		</span>

	
		<label for="method">Method</label>
		<select id="method" name="method">
			<option value="Bkash">Bkash</option>
			<option value="Nagad">Nagad</option>
			<option value="Rocket">Rocket</option>
			<option value="Upay">Upay</option>
		</select>
		<span style="color: red">*
		<?php
			echo $methodErrMsg;
		?>
		</span>
	</fieldset>
	<fieldset>
		
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
		<span style="color: red">*
		<?php
			echo $usernameErrMsg;
		?>
		</span>
		<br><br>
		
	<input type="Submit" value="Confirm"><input type="Reset">
</form>
<h1><?php
			echo $registrationStatus;
?><h1>
</br></br> <a href="./Welcome.php">GO BACK</a>
<?php require('Footer.php'); ?>
</body>
</html>
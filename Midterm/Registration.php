<!DOCTYPE html>
<html>
<head>
<title>TMS</title>
</head>
<?php require('Header.php'); ?>
<body>
	<?php 
	$firstnameErrMsg =$passwordErrMsg=$usernameErrMsg= $lastnameErrMsg = $genderErrMsg = $emailErrMsg = $nidErrMsg = $mobileErrMsg = $address1ErrMsg = $sqErrMsg = $countryErrMsg = "";
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
		$First_Name = test_input($_POST['firstname']);
		$Last_Name = test_input($_POST['lastname']);
		$Email = test_input($_POST['email']);
		$Mobile_no = test_input($_POST['mobile_no']);
		$SHR = test_input($_POST['address']);
		$Gender = isset($_POST['gender']) ? test_input($_POST['gender']):NULL;
		$NID = test_input($_POST['nid']);
		$Country = isset($_POST['gender']) ? test_input($_POST['country']):NULL;
		$Password = test_input($_POST['password']);
		$Username = test_input($_POST['username']);
		$SQ = test_input($_POST['sq']);
		
		if(empty($First_Name)){
			$firstnameErrMsg = "First Name is Empty";
			$errorcount++;
		}
		else{
			if (!preg_match("/^[a-zA-Z-' ]*$/",$First_Name)) {
				$errorcount++;
				$firstnameErrMsg = "Only letters and spaces";
			}}
		if(empty($Last_Name)){
			$lastnameErrMsg = "Last Name is Empty";
			$errorcount++;
		}
		else {
			if (!preg_match("/^[a-zA-Z-' ]*$/",$Last_Name)) {
				$errorcount++;
				$lastnameErrMsg = "Only letters and spaces";
			}
		}
		if(empty($Gender)){
			$genderErrMsg = "Gender is Empty";
			$errorcount++;
		}
		if(empty($Password)){
			$passwordErrMsg = "Password is Empty";
			$errorcount++;
		}
		if(empty($Username)){
			$usernameErrMsg = "Username is Empty";
			$errorcount++;
		}
		else{
			if($errorcount==0 and $Username!="" and $Password!=""){
                if(filesize("data.json")>0){
                    $f = fopen("data.json", 'r');
                    $s = fread($f, filesize("data.json"));
                    $data = json_decode($s);
                    for ($x = 0; $x < count($data); $x++) {
                        if($data[$x]->username===$Username){

                         $usernameErrMsg = "Username is already exists";
						$errorcount++;
						}
					}
				}
			}
		}
		if(empty($Country)){
			$countryErrMsg = "Country is Empty";
			$errorcount++;
		}
		if(empty($Mobile_no)){
			$mobileErrMsg = "Mobile  is Empty";
			$errorcount++;
		}
		if(empty($Email)){
			$emailErrMsg = "Email  is Empty";
			$errorcount++;
		}
		else {
			if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
				$emailErrMsg .= "Please correct your email";
				$errorcount++;
			}
		}
		if(empty($NID)){
			$nidErrMsg = "National Id Card is Empty";
			$errorcount++;
		}
		if(empty($SHR)){
			$address1ErrMsg = "Address is Empty";
			$errorcount++;
		}
        if(empty($SQ)){
			$sqErrMsg = "Please answer a security question";
			$errorcount++;
		}		
		if($errorcount==0){
			if(filesize("data.json")<=0){
			$arr = array(array('firstname' => $First_Name, 'lastname' => $Last_Name ,'gender' => $Gender,'email'=> $Email, 'nid'=> $NID, 'mobile_no'=>$Mobile_no,'address'=> $SHR,'country'=>$Country,'password'=>$Password,'username'=>$Username, 'sq'=>$SQ));
			$f = fopen("data.json", "a");
			fwrite($f, json_encode($arr));
			fclose($f);
			}
			else if(filesize("data.json")>0){
			$arr2 = array('firstname' => $First_Name, 'lastname' => $Last_Name ,'gender' => $Gender,'email'=> $Email, 'nid'=> $NID, 'mobile_no'=>$Mobile_no,'address'=> $SHR,'country'=>$Country,'password'=>$Password,'username'=>$Username, 'sq'=>$SQ);
			$f = fopen("data.json", 'r');
			$s = fread($f, filesize("data.json"));
			$data = json_decode($s);
			array_push($data, $arr2);
			fclose($f);
			$f = fopen("data.json", "w");
			fwrite($f, json_encode($data));
			fclose($f);
			}

			$registrationStatus="Registration Successful";
		}

		else{
			$registrationStatus="Registration failed";
		}	
	}		
?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="POST" novalidate>
	<fieldset>
    <legend>General</legend>
		<label for="fname">First Name:</label>
		<input type="text" name="firstname" id="fname">
		<span style="color: red">*
		<?php
			echo $firstnameErrMsg;
		?>
		</span>
		<br><br>
		<label for="lname">Last Name:</label>
		<input type="text" name="lastname" id="lname">
		<span style="color: red">*
		<?php
			echo $lastnameErrMsg;
		?>
		</span>
		<br><br>
		<label>Gender</label>
		<input type="radio" id="male" name="gender" value="Male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="Female">
		<label for="female">Female</label>
		<span style="color: red">*
		<?php
			echo $genderErrMsg;
		?>
		</span>
	</fieldset>
	<fieldset>
		<legend>Contact</legend>
		<label for="email">Email</label>
		<input type="text" name="email" id="email">
		<span style="color: red">*
		<?php
			echo $emailErrMsg;
		?>
		</span>
		<br><br>
		<label for="nid">National Id:</label>
		<input type="number" name="nid" id="nid">
		<span style="color: red">*
		<?php
			echo $nidErrMsg;
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

	</fieldset>
	<fieldset>
		<legend>Address</legend>
		<label for="address">Street/House/Road</label>
		<input type="text" name="address" id="address">
		<span style="color: red">*
		<?php
			echo $address1ErrMsg;
		?>
		</span>
		<br><br>
		<label for="country">Country</label>
		<select id="country" name="country">
			<option value="Bangladesh">Bangladesh</option>
			<option value="India">India</option>
			<option value="Nepal">Nepal</option>
			<option value="USA">USA</option>
		</select>
		<span style="color: red">*
		<?php
			echo $countryErrMsg;
		?>
		</span>
	</fieldset>
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
	<fieldset>
		<legend>Security Question</legend>
		<label for="sq">Your father's name?</label>
		<input type="text" name="sq" id="sq">
		<span style="color: red">*
		<?php
			echo $sqErrMsg;
		?>
		</span></fieldset>
	<br>
	<input type="Submit" value="Registration"><input type="Reset">
</form>
<h1><?php
			echo $registrationStatus;
?><h1>
<form action="Login.php">
	<label >Already have an account?Click here</label>
	<input type="Submit" value="Login">
</form>
<?php require('Footer.php'); ?>
</body>
</html>
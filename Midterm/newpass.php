<?php


if(isset($_POST["Confirm3"])){ 
$fs = file_get_contents('data.json');
$data = json_decode($fs, true);


foreach ($data as $key => $value) 
{
    if ($_POST["uname"]==$value["username"] && $_POST["pass"]==$value["password"]) {
        $data[$key]['password'] = $_POST["newpass"];
        
		header("location: ./welcome.php");
		}
        
else{
	echo"username or password doesn't match";
	

  }


        $file = json_encode($data);
        file_put_contents('data.json', $file);
}
}





?>

<html><body>
 
</body></html>
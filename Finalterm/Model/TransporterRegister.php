<?php
    session_start();

    include("../Model/DBConnection.php");

    function register()
    {
        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $mobile = $_POST["mobile"];
        $model = $_POST["model"];
        $tnumber = $_POST["tnumber"];
        $lid = $_POST["lid"];
        $led = $_POST["led"];
        $experience = isset($_POST['experience']) ? $_POST['experience'] : "";
        $availability = isset($_POST['availability']) ? $_POST['availability'] : "";
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if (empty($name) || empty($nid) || empty($mobile) || empty($model) || empty($tnumber) || empty($lid) || empty($led) || empty($uname) || empty($pass)) {
            echo "Please insert all data correctly";
        } else {
            $query = "INSERT INTO users (name, nid, mobile, model,tnumber,lid,led,experience,availability,uname,pass) 
                      VALUES ('$name', '$nid', '$mobile', '$model', '$tnumber', '$lid', '$led', '$experience','$availability','$uname','$pass')";
            executeQuery($query);
            echo "Registration Successful!";
        }
    }
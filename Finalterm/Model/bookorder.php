<?php
    
    

    include("../Model/DBConnection.php");

    function register()
    {
        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $mobile = $_POST["mobile"];
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if (empty($name) || empty($nid) || empty($mobile) || empty($uname) || empty($pass)) {
            echo "Please insert all data correctly";
        } else {
            $query = "INSERT INTO orders (name, nid, mobile, uname,pass) 
                      VALUES ('$name', '$nid', '$mobile','$uname','$pass')";
            executeQuery($query);
            echo "Order Successful!";
        }
    }
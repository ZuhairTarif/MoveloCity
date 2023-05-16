<?php
    session_start();
    //include "../Control/Protection.php";
    //verifyNotLoggedIn();

    include("../Model/DBConnection.php");

    function payment()
    {
        $name = $_POST["name"];
        $bkash = $_POST["bkash"];
        $otp = $_POST["otp"];
        

        if (empty($name) || empty($bkash) || empty($otp)) {
            echo "Please insert all data correctly";
        } else {
            $query = "INSERT INTO Payments (name, bkash, otp) 
                      VALUES ('$name', '$bkash', '$otp')";
            executeQuery($query);
            echo "Payment Successful!";
        }
    }
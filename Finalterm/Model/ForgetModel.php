<?php
session_start();

    include("../Model/DBConnection.php");
    

    function cp()
    {
        $new = $_POST['newPassword'];
        $confirm = $_POST['confirmPassword'];

        if ($new == $confirm) {
            $update = "update users set pass='$new' where uname='" . $_POST['uname'] . "'";
            $mysqliResult = executeQuery($update);
            if ($mysqliResult) {
                echo "Password changed successfully";
            } else {
                echo "Username don't exist.";
            }
        } else {
            echo "Password not changed";
        }
    }
<?php
    session_start();
    include("../Model/DBConnection.php");

    function cp()
    {
        $select = "select * from users where name='" . $_SESSION["name"] . "'";

        $mysqliResult = executeQuery($select);
        $data = mysqli_fetch_assoc($mysqliResult);
        $oldpwd = $data["pass"];

        $current = $_POST['currentPassword'];
        $new = $_POST['newPassword'];
        $confirm = $_POST['confirmPassword'];
        if ($current == $oldpwd) {
            if ($new == $confirm) {
                $update = "update users set pass='$new' where name='" . $_SESSION["name"] . "'";
                $mysqliResult = executeQuery($update);
                if ($mysqliResult) {
                    echo "Password changed successfully";
                } else {
                    echo "Password not changed";
                }
            } else {
                echo "New password and confirm password do not match";
            }
        } else {
            echo "Current password is incorrect";
        }
    }
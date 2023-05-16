<?php
    // used where user must have to be logged in
    function verifyLoggedIn()
    {
        if (isset($_SESSION['name'])) {
            header("location: Welcome.php");
            die();
        }
    }

    // used where user doesn't have to be logged in
    function verifyNotLoggedIn()
    {
        if (!isset($_SESSION['name'])) {
            header("location: ../View/Home.php");
            die();
        }
    }
<?php
    session_start();
    require("../Model/DBConnection.php");

    if (isset($_POST["submit"])) login();

    function login()
    {
        if (empty($_POST["uname"]) && empty($_POST["pass"]))
            echo "uname or password cannot be empty";
        else {
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];
            $query = "SELECT * FROM users WHERE uname ='$uname' && pass = '$pass'";
            $mysqliResult = executeQuery($query);

            if ($mysqliResult->num_rows > 0) {
                while ($row = $mysqliResult->fetch_assoc()) {
                    echo "logged in";
                    addSession($row);
                    header("location: ../View/Welcome.php");
                }
            } else echo "no data found";
        }
    }

    function addSession($row)
    {
        $_SESSION["name"] = $row["name"];
        $_SESSION["nid"] = $row["nid"];
        $_SESSION["mobile"] = $row["mobile"];
        $_SESSION["model"] = $row["model"];
        $_SESSION["tnumber"] = $row["tnumber"];
        $_SESSION["lid"] = $row["lid"];
        $_SESSION["led"] = $row["led"];
        $_SESSION["experience"] = $row["experience"];
        $_SESSION["availability"] = $row["availability"];
        $_SESSION["uname"] = $row["uname"];
        $_SESSION["pass"] = $row["pass"];
    }
<?php
    session_start();
    include("../Model/DBConnection.php");

    function modify()
    {
        $oldName = $_SESSION["name"];
        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $model = $_POST["model"];
        $tnumber = $_POST["tnumber"];
        $lid = $_POST["lid"];
        $led = $_POST["led"];
        $experience = $_POST["experience"];
        $availability = $_POST["availability"];

        $query = "UPDATE users SET name='$name', nid='$nid', model='$model', tnumber='$tnumber', 
                  lid='$lid',led='$led',experience='$experience',availability='$availability' 
                  WHERE name='$oldName'";

        if (empty($name) || empty($nid) || empty($model) || empty($tnumber) || empty($lid)
            || empty($led) || empty($experience) || empty($availability))
            echo "Please fill out all the fields properly.";
        else {
            executeQuery($query);

            $_SESSION["name"] = $name;
            $_SESSION["nid"] = $nid;
            $_SESSION["model"] = $model;
            $_SESSION["tnumber"] = $tnumber;
            $_SESSION["lid"] = $lid;
            $_SESSION["led"] = $led;
            $_SESSION["experience"] = $experience;
            $_SESSION["availability"] = $availability;
            echo "User details updated.";
            header("Location: UserDetails.php");
        }
    }

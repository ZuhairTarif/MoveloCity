<?php
    session_start();

    include("../Model/bookorder.php");
//    include "../Control/Protection.php";
//    verifyNotLoggedIn();

    if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $nid = $_POST["nid"];
        $mobile = $_POST["mobile"];
        
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if (empty($name) || empty($nid) || empty($mobile) ||empty($uname) || empty($pass)) {
            echo "Please insert all data correctly";
        } else {
            addSession();
            $mydb = new DB();
            $conobj = $mydb->opencon();
            $mydb->InsertData($name, $nid, $mobile, $uname, $pass, "transporter_data", $conobj);
            $mydb->closecon($conobj);
        }
    }

    function insertSession() {
         $_SESSION["name"] = $_POST["name"];
         $_SESSION["nid"] = $_POST["nid"];
         $_SESSION["mobile"] = $_POST["mobile"];
         $_SESSION["uname"] = $_POST["uname"];
         $_SESSION["pass"] = $_POST["pass"];
    }


    if (isset($_POST["search"])) {

        $mydb = new db();
        $conobj = $mydb->opencon();
        $mydata = $mydb->searchData("transporter_data", $conobj, $_POST["searchbar2"]);


        if ($mydata->num_rows > 0) {
            echo "<form>";
            //echo "<table>";
            echo "<form action='' method='post'>";
            //  echo "<tr><td> First Name</td> <td>Last Name</td> <td>Age</td> <td>Salary</td> <td>Address</td></tr>";

            while ($row = $mydata->fetch_assoc()) {
                $name = $row["name"];
                $nid = $row["nid"];
                $model = $row["model"];
                $tnumber = $row["tnumber"];
                $lid = $row["lid"];
                $led = $row["led"];
                $experience = $row["experience"];
                $availability = $row["availability"];

            }

            echo "</form>";
        } else {
            echo "no results found";
        }
        $mydb->closecon($conobj);
    }

    if (isset($_POST["update"])) {
        $name = $_POST["name"];
        $nid = $_POST["nid"];
       
        // $uname=$_POST["uname"];
        //$pass=$_POST["pass"];


        $mydb = new db();
        $conobj = $mydb->opencon();
        $mydata = $mydb->updateData($name, $nid, $model, $tnumber, $lid, $led, $experience, $availability, "transporter_data", $conobj);

        $mydb->closecon($conobj);
    }


?>
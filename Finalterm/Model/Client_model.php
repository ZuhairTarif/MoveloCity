<?php

    class db
    {

        function opencon()
        {
            $DBHostname = "localhost";
            $DBUsername = "root";
            $DBpass = "";
            $DBName = "tms";

            $conn = new mysqli($DBHostname, $DBUsername, $DBpass, $DBName);
            if ($conn->connect_error) {
                echo "couldn't connect" . $conn->connect_error;
            }
            return $conn;
        }

        function InsertData($name, $nid, $address, $email, $mobile, $uname, $pass, $tablename, $conn)
        {
            $sql = "INSERT INTO $tablename (name, nid, address,email, mobile, uname, pass) VALUES ('$name', $nid,  '$address','$email',$mobile,'$uname','$pass')";

            if ($conn->query($sql) === TRUE) {
                echo "REGISTRATION SUCCESSFUL";
            } else {
                echo "couldn't insert data" . $conn->error;
            }

        }


        function fetchData($tablename, $conn)
        {
            $sqlstr = "SELECT * FROM $tablename ";

            $results = $conn->query($sqlstr);
            return $results;
        }


        function searchData($tablename, $conn, $name)
        {
            $sqlstr = "SELECT * FROM $tablename WHERE name='$name'";

            $results = $conn->query($sqlstr);
            return $results;
        }


        function updateData($name, $nid, $address, $email, $mobile, $tablename, $conn)
        {
            $sql = "UPDATE $tablename SET name='$name', nid=$nid, address='$address', email='$email', mobile=$mobile WHERE name='$name'";

            if ($conn->query($sql) === TRUE) {
                echo "data updated";
            } else {
                echo "couldn't update data" . $conn->error;
            }
        }


        function login($uname, $pass, $tablename, $conn)
        {
            $sqlstr = "SELECT * FROM $tablename WHERE uname ='$uname' && pass = '$pass'";
            $results = $conn->query($sqlstr);
            return $results;
        }


        function closecon($conn)
        {
            $conn->close();
        }

    }


?>
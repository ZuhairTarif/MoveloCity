<?php

    include("../Model/DBConnection.php");
    if (isset($_REQUEST['name'])) {
        $mydb = new db();
        $conobj = $mydb->opencon();
        $mysqliResult = searchData($conobj, $_REQUEST['name']);

        $output = "";

        if ($mysqliResult->num_rows > 0) {
            $i = 0;
            while ($row = $mysqliResult->fetch_assoc()) {
                $output =+ ' 
                User ' . ++$i . '<br>
                <b>Name: </b> ' . $row['name'] . ' <br>
                <b>Model: </b> ' . $row['mobile'] . ' <br>
                <b>Model: </b> ' . $row['model'] . ' <br>
                <b>User: </b> ' . $row['uname'] . ' <br>
                <br>';
            }
        }
        echo $output;
    }

    class DB
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

        function InsertData($name, $nid, $mobile, $model, $tnumber, $lid, $led, $experience, $availability, $uname, $pass, $tablename, $conn)
        {
            $sql = "INSERT INTO $tablename (name, nid, mobile, model,tnumber,lid,led,experience,availability,uname,pass) VALUES ('$name', '$nid', '$mobile', '$model', '$tnumber', '$lid', '$led', '$experience','$availability','$uname','$pass')";

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
            $sqlstr = "SELECT * FROM $tablename WHERE name LIKE '%{$name}%'";

            $results = $conn->query($sqlstr);

            return $results;
        }

        function updateData($name, $nid, $mobile, $model, $tnumber, $lid, $led, $experience, $availability, $tablename, $conn)
        {
            // $sqlstr="SELECT * FROM $tablename WHERE fname='$fname'";

            $sql = "UPDATE $tablename SET name='$name', nid=$nid, model='$model', tnumber='$tnumber', lid='$lid',led='$led',experience='$experience',availability='$availability' WHERE name='$name'";
            //  $sql="UPDATE $tablename SET fname='$fname', lname='$lname', age=$age, salary=$salary, address='$address' WHERE fname='$fname'";

            if ($conn->query($sql) === TRUE) {
                echo "data updated";
            } else {
                echo "couldn't update data" . $conn->error;
            }
        }


        function closecon($conn)
        {
            $conn->close();
        }

    }


?>
<?php
    include_once "DBConnection.php";

    if (isset($_REQUEST['name'])) {
        $html = "";
        $name = $_REQUEST['name'];

        $query = "SELECT * FROM users WHERE name LIKE '%{$name}%'";
        $mysqliResult = executeQuery($query);

        if ($mysqliResult->num_rows > 0) {
            $i = 0;
            while ($row = $mysqliResult->fetch_assoc()) {
                $html .= ' 
                User ' . ++$i . '
                <div><br>
                <b>Name: </b> ' . $row['name'] . ' <br>
                <b>Model: </b> ' . $row['mobile'] . ' <br>
                <b>Model: </b> ' . $row['model'] . ' <br>
                <b>User: </b> ' . $row['uname'] . ' <br>
                <br></div>';
            }
        }

        echo $html;
    }
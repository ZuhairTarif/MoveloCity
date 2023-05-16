<?php
    const HOSTNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'tms';

    function executeQuery($query)
    {
        $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        $mysqliResult = $mysqli->query($query);
        $mysqli->close();
        return $mysqliResult;
    }
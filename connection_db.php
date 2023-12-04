<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IIBT";

function connect($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
};

$conn = connect($servername, $username, $password, $dbname);
?>
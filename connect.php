<?php
// connect to database
$servername = "192.168.20.56";
$username = "root";
$password = "";
$database = "blog";
$port = "3306";


$db = new mysqli($servername, $username, $password, $database);

if ($db->connect_error) {
    die("connection failed: " . $db->connect_error);
}
echo "Connected successfully <br />";

?>

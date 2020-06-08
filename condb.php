<?php
$servername = "localhost";
$database = "lend_sys";
$username = "dornqg378v1h";
$password = "P@ch86eR";
// Create connection
$condb = new mysqli($servername, $username, $password,$database);

// Check connection
if ($condb->connect_error) {
    die("Connection failed: " . $condb->connect_error);
}
echo "connection successfull";
?>
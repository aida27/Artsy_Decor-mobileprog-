<?php
$servername = "localhost";
$username   = "noraidax_decoradmin";
$password   = "X&3n40XEm*nx";
$dbname     = "noraidax_decor";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
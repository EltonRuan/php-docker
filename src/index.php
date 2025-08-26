<?php
$servername = "db";
$username = "root";
$password = "";
$dbname = "mydatabasename";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to MySQL database: " . $dbname;

phpinfo();
?>

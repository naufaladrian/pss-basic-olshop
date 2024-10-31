<?php
$conn = new mysqli('mysql1', 'root', '123', 'dbcoba');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected to DataBase successfully";
?>
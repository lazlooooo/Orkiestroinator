<?php
error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orkiestroinator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
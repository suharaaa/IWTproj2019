<?php 
$severname = "localhost";
$username = "root";
$password = "";
$database = "ocs";

// Create connection
$conn = new mysqli($severname,$username,$password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected Succesfully";
?>
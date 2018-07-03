<?php
// create connection
$conn = mysqli_connect('localhost','root','12012','equity_crm')or die(mysqli_error());
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
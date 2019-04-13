<?php
$servername = "SERVER_IP";  
$username = "USER_NAME";
$password = "DB_PASSWORD";
$dbname = "DB_NAME";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} 
$email_address =$_POST['email_address'];    
$first_name =$_POST['first_name'];
$sql = "INSERT INTO person (email_address, first_name)
VALUES ('$email_address', '$first_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

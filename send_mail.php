<?php
$servername = "127.0.0.1";   //פה זה הפרטים של הדטה בייס שלי
$username = "root";
$password = "310234315";
$dbname = "tutorial";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  //זה אני משדך שמות משתנה 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); //בדיקת התחברות
} 
$email_address =$_POST['email_address'];    // החלק הזה אומר לקחת את הפרטים שמשתמש הקליד ולהכניס לטבלה בשם פרסון שנמצאת בדטה בייס
$first_name =$_POST['first_name'];
$sql = "INSERT INTO person (email_address, first_name)
VALUES ('$email_address', '$first_name')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

<?php
$servername = "localhost";
$username = "root";
$password = "1qam";
$dbname = "testmysql";

$userid = $_REQUEST["userid"];
$city = $_REQUEST["city"];
$temp = $_REQUEST["temp"];
$time = $_REQUEST["time"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userinfo (userid, city, temp, time)
VALUES ($userid, '$city', $temp, '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
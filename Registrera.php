<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "golfgear"

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//prepare and bind
$stmt = $conn->prepare("INSERT INTO register(Email, Username, Password)
VALUES(?, ?, ?)");
$stmt->bind_param("sss", $Email, $Username, $Password);

// set parameters and execute
$Email = "blalala@gmail.com";
$Username = "Martin";
$Password = "hejejeje";
$stmt->execute();

echo "New record created successfully";
$stmt->close();
$conn->close();
?>

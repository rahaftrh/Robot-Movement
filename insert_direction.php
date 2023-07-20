<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// get the direction data from the form
$direction = $_POST["direction"];

// insert the direction data into the database
$sql = "INSERT INTO movements (direction) VALUES ('$direction')";
if ($conn->query($sql) === TRUE) {
  // echo "Direction inserted successfully: $direction";
} else {
  echo "Error inserting direction: " . $conn->error;
}

// display the direction that was just inserted into the database
switch ($direction) {
  case "up":
    echo " up";
    break;
  case "down":
    echo " down";
    break;
  case "left":
    echo " left";
    break;
  case "right":
    echo " right";
    break;
  default:
    echo "Unknown direction";
    break;
}

// close the database connection
$conn->close();
?>
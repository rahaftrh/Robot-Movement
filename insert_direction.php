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
// perform any actions needed based on the direction value
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
  case "stop":
    // perform any actions needed to stop the robot
    echo " stop";
    break;
  default:
    echo "Unknown direction";
    break;
}

// close the database connection
$conn->close();
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wdt_assignment2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* 
-- example code for using sql query --

$sql = "SELECT * FROM user"; -> direct input sql code
$result = mysqli_query($conn,$sql); -> execute, and store the result in $result

if(mysqli_num_rows($result)>0){
  while($row = mysqli_fetch_assoc($result)){
    echo "id: " . $row["userid"]. " - Name: " . $row["username"]." - Realname: ". $row["user_realname"]. "<br>";
  }}; */


?>


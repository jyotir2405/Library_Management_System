<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST["id"];
$name=$_POST["name"];
$issue=$_POST["issue"];
$return=$_POST["return"];
$sql = "INSERT INTO library (Book_ID, Book_Name, Issue_date, Return_Date)
VALUES ('$id', '$name', '$issue','$return')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
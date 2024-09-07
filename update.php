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
$sql = "UPDATE library SET Book_Name='$name',Issue_date='$issue',Return_Date='$return' WHERE Book_ID=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST["id"];
$sql = "SELECT * FROM library where Book_ID=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Book_ID: " . $row["Book_ID"]."<br>".
     "Name: " . $row["Book_Name"]. "<br>".
     "Issue date " . $row["Issue_date"]. "<br>".
     "Retun Date ".$row["Return_Date"]."<br>";
     echo "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
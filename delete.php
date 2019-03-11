<?php 
include 'db.php';
$id = $_GET['id'];


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM contact WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  header('Location:http://localhost:1234/students-app/index.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
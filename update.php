<?php 
include 'db.php';
$id = $_GET['id'];
$name = $_POST["name"];
$email = $_POST["email"]; 



// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
} 

$sql ="UPDATE contact SET name = '$name', email ='$email' WHERE id = $id";

if ($conn->query($sql) === TRUE) {

  header('Location:http://localhost:1234/students-app/index.php');
  
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
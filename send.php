<?php
include 'db.php';

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$joined_on = date("Y-m-d H:i:s");


//checck for the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//write an Sql Query 

$sql = "INSERT INTO contact (name, email,joined_on)
VALUES ('$name','$email','$joined_on')";

if (mysqli_query($conn, $sql)) {

 // Redirect to home page 

   header('Location:http://localhost:1234/students-app/index.php');

} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
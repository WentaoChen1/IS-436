<?php


require 'dbcon.php';

// define variables and set to empty values
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO members (username, password) 
  VALUES 
  ('$username', '$password')";
  
  //echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header('Location: index.html');
?>
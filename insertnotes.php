<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$label = $_POST['label'];
$notes = $_POST['notes'];


  $sql = "INSERT INTO tblnotes (label, notes) 
  VALUES 
  ('$label', '$notes')";
  
  //echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: display.php');
?>
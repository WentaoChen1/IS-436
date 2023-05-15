<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "Delete FROM tblnotes Where nid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted";
header('Location: display.php');

?>
<?php
// Connection
// File Name is dbcon.php

$servername = "studentdb-maria.gl.umbc.edu";
$username = "UF03050";
$password = "UF03050";
$dbname = "UF03050";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
{
    echo "<H7>Welcome to the member's area! User:  " . $_SESSION['username'] . "</H7>";
} else {
    header("Location: index.html");
}
?>
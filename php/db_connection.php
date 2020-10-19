<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "barca_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$conn = mysqli_set_character_set($conn,'utf8');
?>
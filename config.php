<?php
$servername = "sql310.infinityfree.com";
$database = "if0_37985164_ika";
$username = "if0_37985164";
$password = "Anubis335";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>

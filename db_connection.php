<?php
$servername = "padmaoil.local";
$username = "padmaoil183";
$password = "padmaoil183";
$dbname = "Padma_Oil";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
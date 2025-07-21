<?php
$conn = new mysqli("localhost", "root", "", "foodiehub");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

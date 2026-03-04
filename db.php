<?php
$conn = new mysqli("localhost", "root", "", "fb_leads");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
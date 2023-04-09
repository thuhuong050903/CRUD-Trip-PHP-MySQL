<?php 
$conn = mysqli_connect("localhost","root","","booking_project");

if (!$conn) {
    die ("Connection failed to: " . mysqli_connect_error());
}
?>
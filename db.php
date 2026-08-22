<?php
$conn = mysqli_connect("localhost", "root", "", "it2f_db");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
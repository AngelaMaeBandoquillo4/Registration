<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM user_tb WHERE id=$id");

header("Location: view.php");
?>
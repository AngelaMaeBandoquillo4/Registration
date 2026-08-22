<?php
include "db.php";
$id = isset($_GET['id'])?(int)$_GET['id'] : 0;

$result = mysqli_query($conn,"SELECT * FROM user_tb WHERE id=$id");
$user = mysqli_fetch_assoc($result);
if(isset($_POST['update'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $block = $_POST['block'];
    $address = $_POST['address'];
    
    $sql = "UPDATE user_tb
     SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', course = '$course',  year = '$year', block = '$block', address = '$address' WHERE id = $id";
     mysqli_query ($conn, $sql);


     echo "<script>alert('Updated successfully!'); window.location='view.php';</script>";


}
?>

<link rel ="stylesheet" href = "style.css">
<head><title> Edit user </title></head>

<div class="container">
      <center><h1>EDIT USER</h1></center>
<form method="POST">


    <form method="POST">


        <div class="row">
            <div class="field">
                <label>Firstname</label>
                <input type="text" name="firstname"  value="<?= $user['firstname'];?>">
            </div>

            <div class="field">
                <label>Middlename</label>
                <input type="text" name="middlename"  value="<?= $user['middlename'];?>">
            </div>

            <div class="field">
                <label>Lastname</label>
                <input type="text" name="lastname"  value="<?= $user['lastname'];?>">
            </div>
        </div>


        <div class="row">
            <div class="field">
                <label>Course</label>
                <input type="text" name="course" value="<?= $user['course'];?>">
            </div>

            <div class="field">
                <label>Year</label>
                <input type="text" name="year"  value="<?= $user['year'];?>">
            </div>

            <div class="field">
                <label>Block</label>
                <input type="text" name="block"  value="<?= $user['block'];?>">
            </div>
        </div>

     
        <div class="row">
            <div class="field2">
                <label>Address</label>
                <input type="text" name="address" value="<?= $user['address'];?>">




    <div class="buttons">
    <button type="submit" name="update">UPDATE</button>
    <button type="button" onclick="window.location='view.php'">CANCEL</button>
</form>


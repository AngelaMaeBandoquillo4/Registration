<?php
include "db.php";

if (isset($_POST['save'])){
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $block = $_POST['block'];
    $address  = $_POST['address'];

    $sql = "INSERT INTO user_tb (firstname, middlename, lastname, course, year, block, address)
    VALUES ('$firstname', '$middlename', '$lastname', '$course', '$year', '$block', '$address')"; mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html>
    <link rel = "stylesheet" href="style.css">
    <head><title> Register </title></head>
<body>

<div class="container">

    <h1>REGISTRATION</h1>

    <form method="POST">


        <div class="row">
            <div class="field">
                <label>Firstname</label>
                <input type="text" name="firstname">
            </div>

            <div class="field">
                <label>Middlename</label>
                <input type="text" name="middlename">
            </div>

            <div class="field">
                <label>Lastname</label>
                <input type="text" name="lastname">
            </div>
        </div>


        <div class="row">
            <div class="field">
                <label>Course</label>
                <input type="text" name="course">
            </div>

            <div class="field">
                <label>Year</label>
                <input type="text" name="year">
            </div>

            <div class="field">
                <label>Block</label>
                <input type="text" name="block">
            </div>
        </div>

     
        <div class="row">
            <div class="field2">
                <label>Address</label>
                <textarea name="address"></textarea>

              
                    <div class="buttons">
                    <button type="text" name="save">SUBMIT</button>
                    <button type="button" onclick="window.location='view.php'">VIEW</button>
                </div>
            </div>
        </div>

    </form>

</div>

</body>
</html>
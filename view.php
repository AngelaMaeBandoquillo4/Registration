<!DOCTYPE html>
<html>
    <link rel = "stylesheet" href = "style.css">
    <head><title> View Users </title></head>
    <body>

        <div class="table-section">
            <h2>REGISTRATION</h2>
            <table border="1" cellpadding="5">
                <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Middlename</th>
                    <th>Lastname</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Block</th>
                    <th>Address</th>
                    <th>ACTION</th>
</tr>

<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM user_tb");
while ($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['firstname']; ?></td>
        <td><?= $row['middlename']; ?></td>
        <td><?= $row['lastname']; ?></td>
        <td><?= $row['course']; ?></td>
        <td><?= $row['year']; ?></td>
        <td><?= $row['block']; ?></td>
        <td><?= $row['address']; ?></td>

        <td>
            <a href="edit.php?id=<?= $row['id']; ?>" > Edit </a>
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Delete this Record?');">Delete</a>
</td>
 
</tr>
<?php } ?>
</table>
</div>
<div class="buttons">
     <button type="button" onclick="window.location='index.php'">ADD NEW</button>
</body>
</html>
                 
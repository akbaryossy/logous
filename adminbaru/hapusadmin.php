<?php
// include database connection file
$db_connection = mysqli_connect("us-cdbr-east-04.cleardb.com","b7b5b42fa1abdb","0ce40f57","heroku_1a9c847e249e47c");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($db_connection, "DELETE FROM admin WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:admin.php");
?>
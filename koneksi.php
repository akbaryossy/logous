<?php
$koneksi = mysqli_connect("us-cdbr-east-04.cleardb.com","b7b5b42fa1abdb","0ce40f57","heroku_1a9c847e249e47c");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
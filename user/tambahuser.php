<?php
$koneksi = mysqli_connect("localhost","root","","latihan");


$username = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

        mysqli_query($koneksi, "INSERT INTO admin (username,email,alamat,password) VALUES('$username','$email','$alamat','$password')") or die(mysqli_error($koneksi));
        header('Location: index.php');
 
?>
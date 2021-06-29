<?php
$koneksi = mysqli_connect("localhost","root","","latihan");


$username = $_POST['username'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];
$id = $_POST['id'];

        // mysqli_query($koneksi, "UPDATE admin set username,email,alamat,password VALUES'$username','$email','$alamat','$password' WHERE id= '$id'") or die(mysqli_error($koneksi));
        mysqli_query($koneksi,"update admin set username='$username', email='$email', alamat='$alamat', password='$password' where id='$id'") or die(mysqli_error($koneksi));
        header('Location: admin.php');
 
?>
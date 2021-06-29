<?php
$koneksi = mysqli_connect("us-cdbr-east-04.cleardb.com","b7b5b42fa1abdb","0ce40f57","heroku_1a9c847e249e47c");

$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
// $gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
// $password = $_POST['password'];
if(!in_array($ext,$ekstensi) ) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$rand.'_'.$filename);
                mysqli_query($koneksi, "INSERT INTO product (gambar,nama,harga) VALUES('$xx','$nama','$harga')") or die(mysqli_error($koneksi));
                header('Location: upload.php');
	}else{
		// header("location:index.php?alert=gagak_ukuran");
	}
}
       
 
?>
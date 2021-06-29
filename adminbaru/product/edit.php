<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v8/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../Login_v8/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="post" action="editproduct.php" class="login100-form validate-form p-l-55 p-r-55 p-t-178" enctype="multipart/form-data">
					<span class="login100-form-title">
						edit data
					</span>

					<?php 
                                    require '../../koneksi.php';
									$id = $_GET['id'];
                                $select = mysqli_query($koneksi, "SELECT * FROM product WHERE id = '$id'");
                                if($select->num_rows>0){
                                    $no=1;
                                while ($row = $select->fetch_array()) {
                                   
                                ?>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter id">
						<input class="input100" type="hidden" name="id" value="<?php echo $row['id']?>" placeholder="Id">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter gambar">
						<!-- <input class="input100" type="file" name="gambar" value="" placeholder="Gambar"> -->
                        <input class="" type="file" name="gambar" value="<?php echo $row['gambar']?>" placeholder="gambar">
						<span class="focus-input100"></span>
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter nama">
						<input class="input100" type="text" name="nama" value="<?php echo $row['nama']?>" placeholder="nama">
						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter harga">
						<input class="input100" type="text" name="harga" value="<?php echo $row['harga']?>" placeholder="harga">
						<span class="focus-input100"></span>
					</div>

					<!-- <div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="text" name="password" value=" placeholder="Password">
						<span class="focus-input100"></span>
					</div> -->

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							
						</span>

						<!-- <a href="#" class="txt2">
							Username / Password? -->
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Submit
						</button>
					</div>
					<?php
								}}?>
					<!-- <div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don’t have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div> -->
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
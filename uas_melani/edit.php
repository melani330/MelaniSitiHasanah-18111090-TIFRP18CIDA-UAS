<?php
include 'session.php';

$id_register = $_POST["id_reg"];
$nama_depan = $_POST["namadepan"];
$nama_belakang = $_POST["namabelakang"];
$email = $_POST["email"];
$username = $_POST["username"];

include 'header.php';
?>


<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			<!-- membuat form -->
			<form action="config/edit.php" method="POST" class="col-lg-6">
				<h5>Registrasi</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namadepan" value="<?php echo $nama_depan;?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namabelakang" value="<?php echo $nama_belakang?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" value="<?php echo $email;?>">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" name="username" value="<?php echo $username;?>" readonly>
</div>
				</div>
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_reg" value="<?php echo $id_register;?>"/>
				<button type="submit" class="btn btn-primary">Edit</button>
			</form>

			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>
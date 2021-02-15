<?php
// include 'session.php';
include "header.php";
?>
<html>
<body style="background: url('image/bglogin.jpg');background-size: cover;">
    <!-- buat class container -->
    <div class="container infinity-container">
			<div class="row">
			<div class="col-md-1 infinity-left-space"></div>
			
			<!-- FORM BEGIN -->
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center infinity-form">
				<!-- Logo -->
				<div class="text-center mb-4 mt-4">
					<h1 style="color:rgb(194, 153, 19); "><font face="The Austin">Kripikku</font></h1>
				</div>
				<div class="text-center mb-4">	
					<h5 style="color: rgba(253, 248, 197, 0.795);">Join New Member </h5>
				</div>
				<!-- Form -->
				<form class="input-form-login px-3" 
				action="config/register.php" method="POST"
				onsubmit="return (validate())">

				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row"style="color: rgba(253, 248, 197, 0.795);">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" id="nd" name="namadepan" placeholder="Nama Depan" required>
					</div>
					<div class="form-group col-md-6" >
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" id="nb" name="namabelakang" placeholder="Nama Belakang" required>
					</div>
				</div>
				<!-- end baris 1 pada form -->
				<div class="form-row" style="color: rgba(253, 248, 197, 0.795);">
					<div class="form-group col-md-12">
						<label for="contoh1">Email</label>
						<input type="email" class="form-control" id="mail" name="email" placeholder="Email" required>
					</div>
				<!-- baris ke 2 pada form -->
				<div class="form-row" style="color: rgba(253, 248, 197, 0.795);">
					<div class="form-group col-md-6">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" id="name" name="username" placeholder="Username" required>
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Password</label>
						<input type="password" class="form-control"  id="pass" name="password" placeholder="Password" required>
					</div>
				</div>
				</div>
				<!-- end baris 2 pada form -->
				<center><button name="register" type="submit" class="btn btn-primary col-md-6"onclick="validate()">Register</button></center>
               		
					<div class="text-center mb-2">
	                   	<div class="text-center mb-3" style="color:rgba(253, 248, 197, 0.795);">or register with</div>
		                   	
	                   	<!-- Facebook Button -->
	                   	<a href="" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>

                    	<!-- Google Button -->
						<a href="" class="btn btn-social btn-google"><i class="fa fa-google"></i></a>

						<!-- Twitter Button -->
						<a href="" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
					</div>
					<div class="text-center mb-5" style="color: rgba(253, 248, 197, 0.795);">Already have an account? 
						<a class="login-link" href="index.php">Login here</a>
			       	</div>
				<!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
			</form>
			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
	<script type="text/javascript">
		function validate(){  
			var nd=document.getElementById("nd").value;  
			var nb=document.getElementById("nb").value;  
			// var mail=document.getElementById("mail").value;  
			// var name=document.getElementById("name").value;  
			// var pass=document.getElementById("pass").value;  
		console.log(username,pass)
		if (nd==" " && nb=" "){   
		  alert("please complete your biodata!");  
		  return false; 
		// }if (nb==" " ){   
		//   alert("please complete your biodata!");  
		//   return false; 
		// }if (mail==" " ){   
		//   alert("please complete your biodata!");  
		//   return false; 
		// }if (name==" " ){   
		//   alert("please complete your biodata!");  
		//   return false; 
		// }if (pass==" " ){   
		//   alert("please complete your biodata!");  
		//   return false; 
		}
	}
</body>

</html>
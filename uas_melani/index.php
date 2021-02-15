<?php
include "header.php"
?>
<html>
<body style="background: url('image/bglogin.jpg');background-size: cover;" >
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
					<h5 style="color: rgba(253, 248, 197, 0.795);">Welcome Back </h5>
				</div>
				<!-- Form -->
				<form class="input-form-login px-3" 
				action="config/login.php" method="POST"
				onsubmit="return (validate())">

				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row" style="text-align:left; color:rgba(253, 248, 197, 0.795);">
					<div class="form-group col-md-12">
					<label for="contoh2" >Username</label>
						<input type="text" class="form-control" id=name name="username" placeholder="username" required>
					</div>
					<div class="form-group col-md-12">
						<label for="contoh2">Password</label>
						<input type="password" class="form-control" id=pass name="password" placeholder="password" required>
					</div>
				</div>

                <div class="row mb-2">
						<!-- Remember Box -->
			            <div class="col-auto d-flex align-items-center">
			                <div class="custom-control custom-checkbox">
			                    <input type="checkbox" class="custom-control-input" id="cb1">
			                   	<label class="custom-control-label" for="cb1" style="color:  rgba(253, 248, 197, 0.795);">Remember me</label>
			                </div>
				        </div>
			   	    </div>
                		<center><button name="login" type="submit" class="btn btn-primary col-md-6" onclick="validate()">Login</button></center>
						<!-- <a href="config/login.php"></a> -->
					<div class="text-center mb-5" style="color: rgba(253, 248, 197, 0.795);">Don't have an account? 
						<a class="login-link" href="register.php">Register here</a>
			       	</div>
        <!-- end baris 2 pada form -->
        </form>
		</div>
		
	</div> 
	
	<script type="text/javascript">
		function validate(){  
		var name=document.getElementById("name").value;  
		var pass=document.getElementById("pass").value;  
		console.log(username,pass)
		if (name==" " && pass==" "){   
		  alert("your input are wrong!");  
		  return false; 
		}
	}
	</script>
        <!-- end form -->
 
    <!-- end container -->
</body>

</html>